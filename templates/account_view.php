

<?php //var_dump($data['accounts']); exit(); ?>
<div class="container">
    <form id="createAccount" action="/account" method="POST">
        <label>Create Account</label>
        <input type="hidden" name="method" value="create_account">
        <div class="form-group">
    <!--        <label for="inputDescription">Description</label>-->
            <input type="text" name="form[description]" class="form-control" id="inputDescription" placeholder="Input Description">
        </div>
        <button type="submit" class="btn btn-primary">Create account</button>
    </form>
</div>
<br>

<div class="container">
    <form id="createTransaction" action="/account" method="POST">
        <label>Create transaction</label>
        <input type="hidden" name="method" value="create_transaction">
        <div class="form-group">
            <input type="text" name="form[description]" class="form-control" placeholder="Description">
        </div>
        <div>
            <select name="form[account_id]" class="form-control" >
                <?php foreach ($data['accounts'] as $accounts)
                        foreach ($accounts as $account){ ?>
                    <option value="<?=$account['id']?>"><?=$account['description']?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <select name="form[category_id]" class="form-control" >
                <?php foreach ($data['categories'] as $category) { ?>
                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
                <?php } ?>
            </select><br/>
        </div>
        <div>
            <input type="text" name="form[price]" class="form-control" placeholder="Price"> <br/>
        </div>
        <button type="submit" class="btn btn-primary">Create transaction</button>
    </form>
</div>
