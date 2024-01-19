<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>webshobbe</title>
</head>
<body>
    <div class="w3-bar w3-indigo">
        <a href="{{route('homepage')}}" class="w3-bar-item w3-button">Home</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">Categories</button>
            <div class="w3-dropdown-content w3-bar-block w3-border">
                <div class="w3-cell-row">
                    <div class="w3-container w3-cell w3-cell-top">
                        @foreach ($categories as $category)
                            <div class="w3-button w3-block w3-left-align" onmouseover="hover('{{$category->name}}')">{{$category->name}}</div><br>
                        @endforeach
                    </div>
                    <div id="sublist" class="w3-container w3-cell">
                        @foreach ($categories as $category)
                        <div id="{{$category->name}}" style="display:none">
                            @foreach ($category->subcategories as $subcategory)
                                <a href="{{route('category', [$category->name,$subcategory->name])}}" class="w3-button w3-block w3-left-align">{{$subcategory->name}}</a>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <a href="{{route('account')}}" class="w3-bar-item w3-button">{{auth()->user()->username ?? "Login"}}</a>
    </div>
    @yield("content")
</body>
</html>

<script>
    function hover(categoryname){
        let sublist = document.getElementById("sublist");
        for(child of sublist.children){
            if(child.style.display == "block"){
                child.style.display = "none";
            }
            if(child.id == categoryname){
                child.style.display = "block";
            }
        }
    }
</script>