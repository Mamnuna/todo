<div class=container>
<a href="{{ route('items.index') }}">
<input type="button" value="items" class="btn">
</a>
</div>

<style>
.container .btn{
    color: white;
    background-color: black;
    padding: 40px;
    text-align: center;
    transform: translate(400%,10%);
}
.container .btn:hover{
    background-color: white;
    color:black;
}
.container{
    padding: 100px;
    background-color:pink;
}
