<div class="col-md-4"></div>
<div class="col-md-4">
<div class="card p-4 mt-4">
    <form action="#">
        <div class="form-group">
            <label for="firstNumber" class="text-light">First Number:</label>
            <input type="number" name="firstNumber" class="form-control" require>
        </div>
        <div class="form-group">
            <label for="Select" class="text-light">Select Operator:</label>
            <select name="operator" id="operator" class="form-control" >
                <option value="None">None</option>
                <option value="Add">Add</option>
                <option value="Minus">Minus</option>
                <option value="Multiply">Multiply</option>
                <option value="Divide">Divide</option>
            </select>
        </div>
        <div class="form-group">
            <label for="secondNumber" class="text-light">Second Number:</label>
            <input type="number" name="secondNumber" class="form-control" require>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Calculate</button>
        </div>
        <div class="form-group">
            <p class="text-light"><b>The result is: 0</b></p>
        </div>
    </form>
</div>
</div>
<div class="col-md-4"></div>