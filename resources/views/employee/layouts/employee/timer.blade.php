<div class="modal fade " id="startTimer" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollableLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-top">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableLabel"> <em class="icon ni ni-clock"></em> Start Timer</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
                
                <div class="col-lg-12">
                    <div class="form-group">
                    <?php createLabel('project', 'form-label', 'Project'); ?>
                    
                    <?php createSelect('project', 'project', '', '', ['Select One', 'Male', 'Female', 'Other']); ?>
                    </div>
                </div>
                    <br>
                <div class="col-lg-12">
                    <div class="form-group">
                    <?php createLabel('task', 'form-label', 'Task'); ?>
                    
                    <?php createSelect('task', 'task', '', '', ['Select One', 'Male', 'Female', 'Other']); ?>
                    </div>
                </div>

                <br>
                <div class="col-lg-12">
                    <div class="form-group">
                       
                        <div class="form-control-wrap">
                            <?php createInput('text', 'memo', 'memo', 'Memo', 'form-label', '', '', 'Memo'); ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer"><button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-danger"><em class="icon ni ni-play-fill"></em> Start Timer</button>
            </div>
        </div>
    </div>
</div>