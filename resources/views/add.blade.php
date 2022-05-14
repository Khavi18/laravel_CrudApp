@extends('layouts.main')

@section('container')
    
<h3 class="text-center">Add Product Info</h3>
<body>
    <form action = "/add" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>">
        
        <table>
            <tr>
                <label for="name" class="form-label">Name</label>
                <input id="name" class="form-control" type='text' name='product_name' />
            </tr>
            <tr>
                <label for="category" class="form-label">Category</label>
                <input id="category" class="form-control" list="datalistOptions" type='text' name='product_category'> 
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
                <input id="size" class="form-control" type='text' name='product_size' />
            </tr>
            <tr>
                <label for="color" class="form-label">Color</label>
                <input id="color" class="form-control" type='text' name='product_color' />
            </tr>
            <br/>
            <br/>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary"
                    type = 'submit' value = "Add Product">Add Product
                </button>
            </div>
        </table>
    </form>
</body>

@endsection