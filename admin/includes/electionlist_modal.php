<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Election Event</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="electionlist_add.php">
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remarks" class="col-sm-3 control-label">Remarks</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="remarks" name="remarks" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datetime_start" class="col-sm-3 control-label">Start Date and Time</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="datetime_start" name="datetime_start" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datetime_end" class="col-sm-3 control-label">End Date and Time</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="datetime_end" name="datetime_end" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Election Details</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="electionlist_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_title" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_remarks" class="col-sm-3 control-label">Remarks</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="edit_remarks" name="remarks">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_datetime_start" class="col-sm-3 control-label">Start Date and Time</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="edit_datetime_start" name="datetime_start">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_datetime_end" class="col-sm-3 control-label">End Date and Time</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="edit_datetime_end" name="datetime_end">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="electionlist_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE ELECTION</p>
                    <h2 class="bold description"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>



     