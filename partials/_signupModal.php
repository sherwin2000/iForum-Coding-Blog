<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup for an iForum Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/iForum/partials/_handleSignup.php"  id="form1" method="post">
            <div class="modal-body">
            
  <div class="form-group" >
    <label for="signupEmail">Email address</label>
    <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <span id="emailmsg" class="text-danger"></span>
  </div>
  <div class="form-group">
    <label for="signupPassword">Password</label>
    <input type="password" class="form-control" id="signupPassword" name="signupPassword">
    <span id="passmsg" class="text-danger"></span>
  </div>
  <div class="form-group">
    <label for="signupcPassword">Confirm Password</label>
    <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
    <span id="cpassmsg" class="text-danger"></span>
  </div>
  
  <button type="submit" id="signup" class="btn btn-primary" >Signup</button>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                </button>
                
            </div>
            </form>
        </div>
    </div>
</div>