// Add confirmation to logout links
document.addEventListener('DOMContentLoaded', function() {
    // Add custom styles for the modal
    const modalStyle = document.createElement('style');
    modalStyle.textContent = `
        #logoutModal .modal-content {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        #logoutModal .modal-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        #logoutModal .btn-primary {
            border: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        #logoutModal .btn-primary:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transform: translateY(-1px);
        }
    `;
    document.head.appendChild(modalStyle);

    // Create modal HTML and append to body
    const modalHTML = `
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); color: white;">
                    <h5 class="modal-title" id="logoutModalLabel">
                        <i class="fa fa-sign-out" aria-hidden="true"></i> Confirm Logout
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 20px; font-size: 18px;">
                    <p style="text-align: center; margin-top: 10px;">Are you sure you want to log out?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmLogout" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);">Yes, Log Out</button>
                </div>
            </div>
        </div>
    </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', modalHTML);
    
    // Store the href to navigate to when confirmed
    let logoutUrl = '';
    
    // Find all logout links
    const logoutLinks = document.querySelectorAll('a[href="logout.php"], a[href="logout1.php"]');
    
    // Add click event listener to each logout link
    logoutLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            // Prevent the default link behavior
            event.preventDefault();
            
            // Store the logout URL
            logoutUrl = this.getAttribute('href');
            
            // Show the modal
            $('#logoutModal').modal('show');
        });
    });
    
    // Add event listener to the confirm button
    document.getElementById('confirmLogout').addEventListener('click', function() {
        // Hide the modal
        $('#logoutModal').modal('hide');
        
        // Redirect to logout page
        window.location.href = logoutUrl;
    });
}); 