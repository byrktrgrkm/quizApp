<x-app-layout>
    <x-slot name="header">Quizler</x-slot>

    <div class="card">
        <div class="card-body">
            
            <a href="{{  route( 'quizzes.create' ) }}" class="btn btn-sm btn-primary">Quiz Oluştur <i class="bi bi-plus"></i></a>
            
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Quiz</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Bitiş Tarihi</th>
                    <th>Toplam Soru</th>
                    <th scope="col">İşlemler</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($quizzes as $quiz)
                  <tr>
                    <th scope="row">{{ $quiz->title }}</th>
                    <td>{{ $quiz->status }}</td>
                    <td>{{ $quiz->finished_at }}</td>
                    <td>{{ $quiz->questions->count() }}</td>
                    <td>
                            <a href="{{ route('questions.index', $quiz->id) }}" class="btn btn-sm btn-warning"><i class="bi bi-question"></i></a>
                            <a href="{{ route('quizzes.edit', $quiz->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                            <a href="{{ route('quizzes.destroy', $quiz->id) }}" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              {{ $quizzes->links() }}
        </div>
    </div>
    
</x-app-layout>
