                       <article class="card">
                        <img class="card__background" src="https://picsum.photos/300"
                            alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                            width="1920" height="2193" />
                        <div class="card__content | flow">
                            <div class="card__content--container | flow">
                                <h4 class="card__title">{{ $article->title }}</h4>
                                <p class="card__description mt-3">
                                    {{ $article->subtitle }}
                                </p>
                                <p class="card-text">{{ $article->body }}</p>
                                @if($article->category)
                                <div><a href="{{ route('article.category', ['category' => $article->category->id]) }}"
                                            class="small fst-italic text-capitalize card-text">{{ $article->category->name }}</a>
                                </div>
                                @else
                                <p class="small fst-italic text-capitalize">Senza categoria</p>
                                @endif
                                <div
                                    class="mt-1 card-footer d-flex justify-content-between align-items-center card-text">
                                    Redatto il {{ $article->created_at->format('d/m/Y') }} da <a
                                        href="{{ route('article.user', ['user' => $article->user->id]) }}"
                                        class="text-decoration-none card-text">{{ $article->user->name }}</a>
                                </div>
                                <div class="mt-1"><a href="{{ route('article.show', compact('article')) }}"
                                        class="btn btn-primary">DETTAGLIO</a></div>
                            </div>
                        </div>
                    </article>

