@extends('layouts.app')

@section('head')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
<main id="root">
  <ul>
    <li v-for='sport in sports' :key='sport.id'>
      <h1>@{{sport.name}}</h1>
      <h5>@{{sport.rules}}</h5>
      <p>@{{sport.description}}</p>
    </li>
  </ul>
</main>
@endsection

@section('foot-script')
  <script type="text/javascript">
  console.log('ok');
    let app = new Vue({
      el: '#root',
      data: {
        sports: [],
      },

      created() {
        axios.get('http://localhost:8000/api/sports').then((response) =>{
          //console.log(response)
          this.sports = response.data.data;
        })
      }
    });
  </script>
@endsection
