<x-app-layout>
    <x-slot name="header">{{ $quiz->title }}  Quizine Ait Sorular</x-slot>

    <div class="card">
        <div class="card-body">
            
            <h5>
              <a href="{{  route( 'quizzes.index') }}" class="btn btn-sm btn-secondary">Quizlere git</a>
              <a href="{{  route( 'questions.create' , $quiz->id) }}" class="btn btn-sm btn-primary float-right">Soru Oluştur <i class="bi bi-plus"></i></a>
            </h5>
            
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Soru</th>
                    <th scope="col">Fotoğraf</th>
                    
                    <th scope="col">1.Cevap</th>
                    <th scope="col">2.Cevap</th>
                    <th scope="col">3.Cevap</th>
                    <th scope="col">4.Cevap</th>
                    <th scope="col">Doğru Cevap</th>
                    <th scope="col-auto">İşlemler</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($quiz->questions as $question)

                  <tr>
                    <td>{{ $question->question }}</td>
                    <td>@isset($question->image) <img src='{{ asset($question->image) }}' width='50' /> @endisset </td>
                    <td>{{ $question->answer1 }}</td>
                    <td>{{ $question->answer2 }}</td>
                    <td>{{ $question->answer3 }}</td>
                    <td>{{ $question->answer4 }}</td>
                    <td>{{ Str::substr($question->correct_answer, -1)}}. cevap</td>
                    <td>
                      <a href="{{ route('questions.edit', [$quiz->id,$question->id]) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                      <a href="{{ route('questions.destroy',[$quiz->id,$question->id]) }}" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>

                  @endforeach
               
                </tbody>
              </table>

        </div>
    </div>
    
</x-app-layout>
