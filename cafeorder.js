document.addEventListener('DOMContentLoaded', function () {
    initializeButtonBackground();

    document.querySelectorAll('.modal').forEach(modal => {
        modal.style.display = 'none';
    });

    document.querySelectorAll('.sizeButton').forEach(button => {
        button.style.marginTop = '10px';
        button.style.padding = '5px';
        button.style.fontSize = 'medium';
        button.style.color = 'var(--green)';
    });

    document.querySelectorAll('.timeButton').forEach(button => {
        button.style.marginTop = '10px';
        button.style.padding = '5px';
        button.style.fontSize = 'medium';
        button.style.color = 'var(--green)';
    });

    document.querySelectorAll('.confirmButton').forEach(button => {
        button.style.marginTop = '10px';
        button.style.padding = '5px';
        button.style.fontSize = 'medium';
        button.style.color = 'var(--green)';
    });

    document.querySelectorAll('.deleteButton').forEach(button => {
        button.style.marginTop = '10px';
        button.style.padding = '5px';
        button.style.fontSize = 'medium';
        button.style.color = 'var(--green)';
    });

   

    // orderButton
    document.querySelectorAll('.orderbutton').forEach(orderButton => {
        orderButton.addEventListener('click', (event) => {
            const modalId = orderButton.dataset.modal;
            const modal = document.getElementById(modalId);
            const beverageName = event.target.getAttribute('databeverage');
            console.log(beverageName);

            const sizeButtons = modal.querySelectorAll('.sizeButton');
            sizeButtons.forEach(button => {
                button.dataset.beverage = beverageName;
            });

            modal.style.display = 'block';

            initializeButtonBackground();
        });
    });

    // closeButton
    document.querySelectorAll('.closemodalbutton').forEach(closeButton => {
        closeButton.addEventListener('click', () => {
            const modalId = closeButton.dataset.modal;
            const modal = document.getElementById(modalId);
            window.chosenSize =  null;
            window.chosenTime = null;
            modal.style.display = 'none';
        });
    });

    // sizeButton
    document.querySelectorAll('.sizeButton').forEach(button => {
        button.addEventListener('click', (event) => {
            const chosenSize = button.dataset.size;
            const beverageName = button.dataset.beverage;

            document.querySelectorAll('.sizeButton').forEach(button =>{
                button.style.background = '#D7E9E1';
            })
            let targetbutton = event.target;
            targetbutton.style.background = '#E9B7C8';

            window.chosenSize = chosenSize;
        });
    });

   

        // timeButton
    document.querySelectorAll('.timeButton').forEach(button => {
        button.addEventListener('click', (event) => {
            const chosenTime = button.dataset.time;
            document.querySelectorAll('.timeButton').forEach(button => {
                button.style.background = '#D7E9E1';
            });
            let targetbutton = event.target;
            targetbutton.style.background = '#E9B7C8';
            const beverageName = button.dataset.beverage;
            window.chosenTime = chosenTime;

            console.log('Time Button clicked');
        });
    });


    document.querySelectorAll('.deleteButton').forEach(button => {
        button.addEventListener('click', (event) => {
            const orderId = event.target.dataset.orderid;
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "myorder.php", true);  
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert('Order deleted successfully.');
                    location.reload();
                }
            };
            
            const data = `deleteOrder=true&orderId=${orderId}`;
            xhr.send(data);
        });
    });
   

    // confirmButton
    document.querySelectorAll('.confirmButton').forEach(button => {
        button.addEventListener('click', (event) => {
        const ordername = event.target.getAttribute("databeverage");
        const beverageImage = event.target.getAttribute("databeverageimage"); 

            if (!window.chosenTime && event.target.classList.contains('confirmButton')) {
                window.alert('Please choose a pick-up time.');
                return;
            }

            if (!window.chosenSize) {
                window.alert('Please choose a size for the beverage.');
                return;
            }
        
            let pickupTime;

            const currentTime = new Date();
            const currentHours = currentTime.getHours().toString().padStart(2, '0');
            const currentMinutes = currentTime.getMinutes().toString().padStart(2, '0');
            const currentDate = `${currentTime.getFullYear()}-${(currentTime.getMonth() + 1).toString().padStart(2, '0')}-${currentTime.getDate().toString().padStart(2, '0')}`;


            if (window.chosenTime === 'Right Now'){
                pickupTime = `${currentHours}:${currentMinutes} ${currentDate}`;
                
            } else if (window.chosenTime === 'In 30 mins'){
                const afterHalfTime = new Date();
                afterHalfTime.setMinutes(currentTime.getMinutes() + 30);
                const afterHalfHours = afterHalfTime.getHours().toString().padStart(2, '0');
                const afterHalfMinutes = afterHalfTime.getMinutes().toString().padStart(2, '0');
                pickupTime = `${afterHalfHours}:${afterHalfMinutes} ${currentDate}`;
                
            } else if (window.chosenTime === 'In 1 hour'){
                const afterAnHourTime = new Date();
                afterAnHourTime.setHours(currentTime.getHours() + 1);
                const afterAnHourTimeHours = afterAnHourTime.getHours().toString().padStart(2, '0');
                const afterAnHourTimeMinutes = afterAnHourTime.getMinutes().toString().padStart(2, '0');
                pickupTime = `${afterAnHourTimeHours}:${afterAnHourTimeMinutes} ${currentDate}`;
            }

            alert(`Your order is confirmed. \nBeverage: ${ordername}\nSize: ${window.chosenSize}\nEstimated pick-up time: ${pickupTime}`);
        
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "myorder.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert('Your order is confirmed and saved.');
                }
            };

            const data = `confirmOrder=true&name=${ordername}&sizePrice=${window.chosenSize}&time=${pickupTime}&beverageImage=${beverageImage}`;
            xhr.send(data);
            
            window.chosenSize = null;
            window.chosenTime = null;
            
            const modalId = button.dataset.modal;
            const modal = document.getElementById(modalId);
            modal.style.display = 'none';
        });
    });


    function initializeButtonBackground(){
        document.querySelectorAll('.sizeButton').forEach(button =>{
            button.style.background = '#D7E9E1';
        });
        document.querySelectorAll('.timeButton').forEach(button =>{
            button.style.background = '#D7E9E1';
        });
    }
    
    
});

//startButton
document.getElementById("startButton").addEventListener("click", function(event) {
    window.location.href = "coffee.php"; 
});