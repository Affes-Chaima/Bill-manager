@extends('template')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Articles</p>
        <div>
        <a class="button is-warning" href="{{ route('generated::MGLCqQ73wDsbSvBD') }}">List</a>
      </div>

        </header>

        <div class="card-content">

                <div class="mx-auto pull-right">
                    <div class="">
                        <form action="{{ route('articles.index') }}" method="GET" role="search">

                            <div class="input-group">
                                <span class="input-group-btn mr-5 mt-1">
                                    <button class="btn btn-primary" type="submit" title="Search projects">
                                        <i class="bi bi-search"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                          </svg>
                                    </button>
                                </span>
                                <input type="text" class="form-control mr-2" name="term" placeholder="Search articles" id="term">
                                <a href="{{ route('articles.index') }}" class=" mt-1">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button" title="Refresh page">
                                            <i class="bi bi-arrow-clockwise"></i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                              </svg>
                                        </button>
                                    </span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Article</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article->IDART }}</td>
                                <td><strong>{{ $article->lib_art }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('articles.show', $article->IDART) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('articles.edit', $article->IDART) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('articles.destroy', $article->IDART) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <td colspan=5>
                        <a class="button is-primary" href="{{ route('articles.create') }}">Add bill</a></td>
                </table>

          <footer class="card-footer">
              {{ $articles->links() }}
          </footer>
      </div>
  @endsection
