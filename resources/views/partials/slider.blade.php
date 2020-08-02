<section
    style="width: 75%;height: 200px;background-color: greenyellow;border: black 1px solid;border-radius: 20px;margin: 10px auto; text-align: center">
    <ol>
        @foreach($data as $to)
            <li>{{$to}}</li>
        @endforeach
    </ol>
</section>
