@extends('layouts.adminapp')
@section('pagetitle', 'Admin')

@section('content')
    <!-- First section-->
    <section class="side-nav-right">
        <div class="heading">
            <h2>Menu</h2>
        </div>
        <div class="content ">

<form class="form-style-1 placeholder-1" action="menusubmit" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
        <div class="heading">
            <h2>Create New Item</h2>
        </div>
        <div class="row">
                <div class="second-col"> 
                    <label for="item_name">Item Name</label>
                    <input type="text" name="item_name" id="item_name">
                </div>
                <div class="second-col"> 
                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price" step="0.01">
                </div>
                <div class="second-col"> 
                    <label for="stag">Special Tag:</label>
                    <select id="stag" name="stag">
                        <option value="oferta">OFERTA</option>
                        <option value="especialidad">ESPECIALIDAD</option>
                        <option value="tallaextra">TALLA EXTRA</option>
                        <option value="none">None</option>
                    </select>                    
                </div>
                <div class="second-col"> 
                    <label for="size">Size:</label>
                    <select id="size" name="size">
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                        <option value="xlarge">Extra Large</option>
                    </select>                    
                </div>
                <div class="second-col"> 
                    <label for="type">Type:</label>
                    <select id="type" name="type">
                        <option value="pollo">Pollo</option>
                        <option value="carne">Carne</option>
                        <option value="mixta">Mixta</option>
                    </select>                    
                </div>
                <div class="full-col">
                    <label for="ingredients">Ingredients:</label>
                    <input type="text" name="ingredients" id="ingredients">
                </div>
                <div class="full-col"> 
                    <label for="image">Image Name</label>
                    <input type="text" name="image" id="image">  
                </div>
                
                
        </div><!-- row -->
        <button type="submit" value="Submit" class="btn-primary-border">Submit</button>

    </form>
</div>
</section>