<body>
    <form class="form-horizontal" id="create" >
        <div class="form-group">
            <label for="editorSQL">Editor SQL</label>
            <textarea class="form-control" id="editorSQL" name ="query" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Generar</button>
    </form>
</body>
<div class="alert alert-primary" role="alert" id="resultado">
  
</div>
<script>
$(document).ready(function(){
    CreateSQL('#create');

    $('#resultado').hide();
})
</script>