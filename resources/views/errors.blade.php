@if($errors->any())

    <div>

        <div class="notification is-danger">

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }} </li>

                @endforeach

            </ul>

        </div>

    </div>

                    
@endif