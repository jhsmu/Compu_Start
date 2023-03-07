        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Compu Start</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Adam Wathan</a>
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="../img/logo/avatar.png" alt="">
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="../admin/micuenta.php" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Mi cuenta</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>