<script src='/group13/js/test.js'></script>

    <div class="container">
        <div class="text-center">
            <br/>
            <h1 style="color: #000000;">To Do List</h1>
            <hr/>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="panel panel-warning">
                    <div class="alert alert-danger">
                        <div class="panel-title">New Task</div>
                    </div>
                    <div class="panel-body">
                        
                            <div class="form-group">
                                <label>Name :</label>
                                <input type="text" id="input" class="form-control js-todo-input" />
                            </div>
                            <label>Status :</label>
                            <select class="form-control" required="required">
                                <option value="1">Active</option>
                                <option value="0">De-active</option>
                            </select>
                            <br/>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning add">Add</button>&nbsp;
                                <button type="submit" class="btn btn-danger">Close</button>
                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <button type="button" class="btn btn-primary">
                    <span class="fa fa-plus mr-2"></span>New Task
                </button>
                <div class="row mt-15">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Write a task..." />
                            <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <span class="fa fa-search mr-2"></span>Search
                            </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-15">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="text" class="form-control" />
                                    </td>
                                    <td>
                                        <select class="form-control">
                                            <option value="-1">All</option>
                                            <option value="0">De-active</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="item_input">
                                    <td>1</td>
                                    <td>Check in</td>
                                    <td class="text-center">
                                        <span class="badge badge-success">
                                                    Active
                                                </span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-warning">
                                            <span class="fas fa-edit"></span>
                                        </button>
                                        &nbsp;
                                        <button type="button" class="btn btn-danger">
                                            <span class="fa fa-trash"></span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
