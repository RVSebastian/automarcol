<?php include'./components/header.php';?>
<style>
    .wk-dayname{
        color: black !important;
    }
    .wk-weektop{
        background-color: black !important;
    }
</style>
<div class="home-content">
    <div class="flex flex-wrap">
        <div class="basis-11/12 m-4 mt-0 p-2">
            <div class="bg-blue-900 shadow">
               <h1 class='text-center text-3xl font-semibold text-gray-100 p-5'>CITAS TALLER</h1>
                <iframe
                    src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%233F51B5&ctz=America%2FBogota&mode=WEEK&showDate=0&showPrint=0&showTabs=0&showCalendars=0&showTz=0&showTitle=0&showNav=0"
                    width="100%" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <div class="basis-11/12 m-4 mt-0 p-2">
            <div class="bg-blue-900 shadow">
               <h1 class='text-center text-3xl font-semibold text-gray-100 p-5'>CITAS TEST DRIVE</h1>
                <iframe
                    src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%233F51B5&ctz=America%2FBogota&mode=WEEK&showDate=0&showPrint=0&showTabs=0&showCalendars=0&showTz=0&showTitle=0&showNav=0"
                    width="100%" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
</div>

<?php include'./components/footer.php';?>