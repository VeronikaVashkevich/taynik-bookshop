<div class="books">
    @foreach($books as $book)
        <div class="book-small mt-30">
            <div class="book-cover">
                <img src="{{ $book->image }}" alt="">
            </div>
            <div class="book-title fs-21 fw-600">
                <form action="{{ route('book', $book->id) }}" method="post">
                    @csrf
                    @method('post')
                    <input type="hidden" name="bookId" value="{{$book->id}}">
                    <button type="submit" class="fs-24 fw-600 color-black btn bg-white"
                            style="text-align: left;">{{ $book->name }}</button>
                </form>
            </div>
            <div class="book-author fs-19 fw-500">
                {{ $book->author }}
            </div>
            <div class="book-price fs-22 fw-600">
                @if($book->price_sale)
                    {{ $book->price_sale }}р
                    <span class="book-old-price">{{ $book->price }}р</span>
                @else {{ $book->price }}р
                @endif
            </div>
            <div class="add-to-cart">
                <a href="{{ route('addToCart', ['id' => $book->id]) }}">
                    <input type="button" value="В корзину" class="btn btn-cart">
                </a>
            </div>
        </div>
    @endforeach
</div>
