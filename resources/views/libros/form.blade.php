<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <link rel="stylesheet" href="{{ @mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="antialiased">
    <main>
        <section class="bg-gray-200 px-16 py-6 shadow flex items-center justify-between">
            <h1 class="text-3xl font-bold">Crear Libro</h1>
        </section>

        <section class="px-16 mt-12 mb-6">
            <form action="{{ route('libros.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-3 block text-base font-medium text-[#07074D]">
                        Titulo
                    </label>
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo"
                        value="{{ old('titulo', '') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('titulo')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="autor" class="mb-3 block text-base font-medium text-[#07074D]">
                        Autor
                    </label>
                    <input type="text" name="autor" id="autor" placeholder="Autor"
                        value="{{ old('autor', '') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('autor')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="editorial" class="mb-3 block text-base font-medium text-[#07074D]">
                        Editorial
                    </label>
                    <input type="text" name="editorial" id="editorial" placeholder="Editorial"
                        value="{{ old('editorial', '') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('editorial')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="genero" class="mb-3 block text-base font-medium text-[#07074D]">
                        Genero
                    </label>
                    <input type="text" name="genero" id="genero" placeholder="Genero"
                        value="{{ old('genero', '') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('genero')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="isbn" class="mb-3 block text-base font-medium text-[#07074D]">
                        isbn
                    </label>
                    <input type="text" name="isbn" id="isbn" placeholder="isbn"
                        value="{{ old('isbn', '') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('isbn')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="edicion" class="mb-3 block text-base font-medium text-[#07074D]">
                        Edición
                    </label>
                    <input type="text" name="edicion" id="edicion" placeholder="Edición"
                        value="{{ old('edicion', '') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('edicion')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="anio" class="mb-3 block text-base font-medium text-[#07074D]">
                        Año
                    </label>
                    <input type="text" name="anio" id="anio" placeholder="Año" value="{{ old('anio', '') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('anio')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="idioma" class="mb-3 block text-base font-medium text-[#07074D]">
                        Idioma
                    </label>
                    <input type="text" name="idioma" id="idioma" placeholder="Idioma"
                        value="{{ old('idioma', '') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('idioma')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <button class="bg-green-500 px-4 py-2 hover:bg-green-600 text-white rounded">Guardar</button>
            </form>
        </section>
    </main>
</body>

</html>
