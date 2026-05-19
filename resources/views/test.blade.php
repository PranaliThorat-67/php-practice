@php
    $user = "anisha gupta";
@endphp

<script>
    var data = {{ Js::from($user)}};
    console.log(data);
</script>