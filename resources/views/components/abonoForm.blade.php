<h2 class="my-4">Gestion de los Abonos</h2>

<div class="card mb-4">
    <div class="card-body">
        
        <div class="row">
            
            <div class="col-8">

                <div class="card mb-4 mt-5" style="max-height: 500px; overflow-y: scroll;">
                    
                    <main class="py-3">
                        <div class="container-fluid">
                            {{$slot}}
                        </div>
                    </main>

                </div>
                

            </div>

            <div class="col-4">

                <div id="layoutAuthentication">
                    <div id="layoutAuthentication_content">
                        <main>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                            <div class="card-header bg-dark"><h3 class="text-center text-white font-weight-light my-4">Registrar Abono</h3></div>
                                            <div class="card-body">
                                                @yield('abonoForm')
                                            </div>
                                            <div class="card-footer text-center py-3">
                                                <div class="small"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                   
                </div>

            </div>

        </div>

    </div>
</div>