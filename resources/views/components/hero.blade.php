<div class="grid items-center">
    <div class="z-20 w-full h-full col-start-1 row-start-1 opacity-40 bg-primary-800"></div>
    
    <div class="z-30 flex flex-col items-center justify-center col-start-1 row-start-1 text-center">
        <h1>
            <span class="block font-bold text-white text-8xl text-opacity-90">{{ $title ?? '' }}</span>
            <span class="block text-5xl font-bold text-white text-opacity-80">{{ $subtitle ?? '' }}</span>
        </h1>
    </div>
    
    <img
        class="z-10 col-start-1 row-start-1 object-cover w-full min-h-[50vh] lg:h-[calc(100vh-9rem)]"
        src="{{ $img ?? '' }}"
        alt=""
    >
</div>