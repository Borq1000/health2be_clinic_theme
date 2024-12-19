// FAQ Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
    const toggles = document.querySelectorAll('.vc_toggle_title');
    
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const parent = this.closest('.vc_toggle');
            const content = parent.querySelector('.vc_toggle_content');
            
            // Close all other toggles
            document.querySelectorAll('.vc_toggle').forEach(item => {
                if (item !== parent && item.classList.contains('vc_toggle_active')) {
                    item.classList.remove('vc_toggle_active');
                    item.querySelector('.vc_toggle_content').style.display = 'none';
                }
            });
            
            // Toggle current item
            parent.classList.toggle('vc_toggle_active');
            
            if (parent.classList.contains('vc_toggle_active')) {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });
    });
});