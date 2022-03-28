@include('admin.head')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            @include('admin.main')
            @include('admin.excelupload')
            <!-- End of Main Content -->

            <!-- Footer -->
@include('user.footer')
