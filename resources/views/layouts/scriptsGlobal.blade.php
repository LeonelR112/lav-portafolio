<script>
    function route(to = ''){
        return `{{url('')}}/${to}`;
    }

    function asset(to = ''){
        return `{{asset('assets')}}/${to}`;
    }
</script>