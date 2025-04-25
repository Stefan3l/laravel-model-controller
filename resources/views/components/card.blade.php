@props([
    'title', 'text' , 'nationality', 'date', 'vote'
])
    
        <div class="card h-100 shadow-black shadow-lg">
            <div class="py-3">
                <h2 class="text-center fs-3 fw-bold">{{ Str::limit($title, 15) }}</h2>
                <hr>
                <p class="fs-4 fw-bold text-center">{{ $text }}</p>
                <div class="d-flex flex-column align-items-center">
                    <h5 class="text-muted fs-6 fw-bold">NATIONALITY:</h5>
                    <h3 class="fs-4 fw-bold text-uppercase"> {{ $nationality }}</h3>
                </div>
                <div class="d-flex flex-column align-items-center mt-3">
                    <h5 class="text-muted fs-6 fw-bold">RELEASE DATE:</h5>
                    <h3 class="fw-bold fs-4"> {{ $date }}</h3>
                </div>
            </div>
            <div class=" py-3 text-center bg-primary"> 
                <p class="text-white fs-4">Voto: {{ $vote }}</p>
                <div class="stars">
                    @for ($i = 1; $i <= 10; $i++)
                        @if ($i <= $vote)
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        @else
                            <i class="fa-regular fa-star" style="color: #FFD43B;"></i>
                        @endif
                    @endfor
                </div>
                
            </div>
        </div>
    