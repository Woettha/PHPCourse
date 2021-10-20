@extends('template')
@section('main')
<ul>
    <?php
    foreach ($records as $record){
        echo "<li> $record </li>";
        //echo '<li>' . $record . '</li>'; This looks in the 'routes/web.php' for the variable
    }
    ?>
</ul>
@endsection
