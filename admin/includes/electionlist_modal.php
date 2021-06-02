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
                    <label for="title_list" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title_list" name="title_list" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remarks" class="col-sm-3 control-label">Remarks</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="remarks" name="remarks">
                    </div>
                </div>
                <div class="form-group">
                    <label for="datetime_start" class="col-sm-3 control-label">Start Date & Time</label>

                    <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="datetime_start" name="datetime_start" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datetime_end" class="col-sm-3 control-label">End Date & Time</label>

                    <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="datetime_end" name="datetime_end" required>
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
                    <label for="edit_title_list" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_title_list" name="title_list">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_remarks" class="col-sm-3 control-label">Remarks</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_remarks" name="remarks">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_datetime_start" class="col-sm-3 control-label">Start Date & Time</label>

                    <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="edit_datetime_start" name="datetime_start">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_datetime_end" class="col-sm-3 control-label">End Date & Time</label>

                    <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="edit_datetime_end" name="datetime_end">
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
                <input type="hidden" class="id" name="id" value="<?php echo $id;?>">
                <div class="text-center">
                    <p>DELETE ELECTION</p>
                    <h2 class="bold election_name"></h2>
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

<!-- Update Logo -->
<!-- <div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="election_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="electionlist_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Club Logo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div> -->



     