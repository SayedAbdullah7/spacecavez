@props(['disabled' => false])

<textarea id="editor" name="{{ $attributes['name'] }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'no-tailwindcss-base']) !!}>
    {{ $slot }}
</textarea>

@push('scripts')
{{--    <script src="ckeditor.js"></script>--}}
    <script>
        ClassicEditor.create(document.querySelector('#editor'), {
            extraPlugins: [imageUploadAdapter],
        });

        function imageUploadAdapter(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new UploadAdapter(loader);
            };
        }

        class UploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file.then(file => new Promise((resolve, reject) => {
                    const formData = new FormData();
                    formData.append('image', file);

                    axios.post('/upload-image', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }).then(response => {
                        resolve({
                            default: response.data.url
                        });
                    }).catch(error => {
                        console.error(error.response.data); // Print the error content
                        console.error(error.response); // Print the error content
                        console.error(error.responseText); // Print the error content
                        reject(error);
                    });
                }));
            }
        }

    </script>
@endpush
