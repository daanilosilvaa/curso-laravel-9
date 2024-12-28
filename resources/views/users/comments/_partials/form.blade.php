<div class="w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
    <label for="">Comentario</label>
    <textarea name="body" id="" cols="30" rows="10" placeholder="Contudo do comentario"
        value="{{ $comment->body ?? old('body') }}"
        class= "form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-block">
        </textarea>
    <label for="visible">
        <input type="checkbox" name="visible" id="">
        visível?
    </label>

    <button type="submit"
        class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Enviar
    </button>
</div>
