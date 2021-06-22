<form action="" method="get">
    <div class="input-group mb-3 mt-3">
        <input type="text" class="form-control" placeholder="Search product" aria-describedby="searchBtn" name="search" 
        value="{{ request()->search }}">
        <button class="btn btn-outline-orange" type="submit" id="searchBtn">search</button>
    </div>
</form>