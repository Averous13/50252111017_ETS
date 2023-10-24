<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Post') }}
        </h2>
    </x-slot>

    <div class="">
        <form method="POST" action="/dashboard/post" enctype="multipart/form-data">
            @csrf
    
            <!-- Name -->
            <div>
                <x-input-label for="nama" :value="__('Nama')" />
                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="nama" />
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>
            
            <div>
                <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                <x-text-input id="deskripsi" class="block mt-1 w-full" type="text" name="deskripsi" :value="old('deskripsi')" required autofocus autocomplete="deskripsi" />
                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
            </div>
            
            <div>
                <x-input-label for="kecacatan" :value="__('Kecacatan')" />
                <x-text-input id="kecacatan" class="block mt-1 w-full" type="text" name="kecacatan" :value="old('kecacatan')" required autofocus autocomplete="kecacatan" />
                <x-input-error :messages="$errors->get('kecacatan')" class="mt-2" />
            </div>

            <div class="mb-3">
                <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">jenis</label>
                <select name="jenis_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  @foreach ($jenies as $jenis)
                    @if (old('jenis_id') == $jenis->id)
                      <option value="{{ $jenis->id }}" selected>{{ $jenis->nama }}</option>
                    @else
                    <option value="{{ $jenis->id }}">{{ $jenis->nama }}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              
              <div class="mb-3">
                  <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">status</label>
                  <select name="status_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($statues as $status)
                      @if (old('status_id') == $status->id)
                        <option value="{{ $status->id }}" selected>{{ $status->nama }}</option>
                      @else
                      <option value="{{ $status->id }}">{{ $status->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>

            <div>
                <x-input-label for="jumlah" :value="__('Jumlah')" />
                <x-text-input id="jumlah" class="block mt-1 w-full" type="text" name="jumlah" :value="old('jumlah')" required autofocus autocomplete="jumlah" />
                <x-input-error :messages="$errors->get('jumlah')" class="mt-2" />
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Post image</label>
                <img class="img-preview img-fluid col-sm-5 mb-3">
                <input class="form-control  @error('image') is-invalid  @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>

    
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Create Product') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
      
            imgPreview.style.display = 'block';
      
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
      
            oFReader.onload = function(oFREvent){
              imgPreview.src = oFREvent.target.result;
            }
          }
    </script>
</x-app-layout>