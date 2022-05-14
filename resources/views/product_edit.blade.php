@extends('layouts.main')

@section('container')
<body>
    <form action = "/edit/<?php echo $users[0]->Id; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <table>
        <tr>
        <label for="name" class="form-label">Name</label>
            <input id="name" class="form-control" type = 'text' name = 'product_name' value = '<?php echo $users[0]->Name; ?>' />
        </tr>
        <tr>
            <label for="category" class="form-label">Category</label>
            
                <input id="category" class="form-control" list="datalistOptions" type = 'text' name = 'product_category' value = '<?php echo $users[0]->Category; ?>'>
                    <datalist id="datalistOptions">
                        <option value="Tops">
                        <option value="Bottoms">
                        <option value="Footwear">
                        <option value="Accessories">
                    </datalist>
                </input>
            
        </tr>
        <tr>
            <label for="size" class="form-label">Size</label>
                <input id="size" class="form-control" type = 'text' name = 'product_size' value = '<?php echo $users[0]->Size; ?>' />
        </tr>
        <tr>
            <label for="color" class="form-label">Color</label>
                <input id="color" class="form-control" type = 'text' name = 'product_color' value = '<?php echo $users[0]->Color; ?>' />
        </tr>
        <br/>
        <br/>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type = 'submit' value = "Update">Update</button>
            </div>
        </tr>
    </table>
    </form>
</body>

@endsection