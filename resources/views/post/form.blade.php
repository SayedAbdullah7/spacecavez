<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-full">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{$post->id?'Update':'Create'}} Post
                            </h2>
                        </header>


                        <form method="post" action="{{ $post->id?route('post.update',$post->id):route('post.store') }}" class="mt-6 space-y-6"  enctype="multipart/form-data">
                            @csrf
                            @if($post->id)
                                @method('patch')
                            @endif

                            <div>
                                <x-input-label for="title" :value="__('title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $post->title)" required autofocus autocomplete="title" />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>
                            <div>
                                <x-input-label for="content" :value="__('content')" />
                                <x-ckeditor id="content" name="content" type="text" class="mt-1 block w-full text-lg no-tailwindcss-base"  required autofocus autocomplete="content" >{{ old('content', $post->content)}}</x-ckeditor>
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div>
                            <div>
                                <x-input-label for="image" :value="__('cover')" />
                                @if($post->id)
                                    <x-file-input id="image" name="image" type="file" class="mt-1 block w-full" autofocus autocomplete="image" >{{ old('image', $post->image)}}</x-file-input>
                                @else
                                    <x-file-input id="image" name="image" type="file" class="mt-1 block w-full" required autofocus autocomplete="image" >{{ old('image', $post->image)}}</x-file-input>
                                @endif
                                <x-input-error class="mt-2" :messages="$errors->get('image')" />
                            </div>
                            <div>
                                <x-select id="select" class="block w-full" name="category" required>
                                    <option value="" {{empty($post->category)?'selected':''}} disabled hidden>choose a category</option>
                                    <option value="event" {{$post->category == 'event'?'selected':''}}>event</option>
                                    <option value="project" {{$post->category == 'project'?'selected':''}}>project</option>
                                    <option value="education"  {{$post->category == 'education'?'selected':''}}>education</option>
                                </x-select>
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'post-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>

                </div>
            </div>
    </div>
</x-app-layout>
