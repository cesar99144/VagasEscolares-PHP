 $(document).ready(function() {

      $("#modalidade").select2();

    });

    $(document).on("click", ".open-AddBookDialog", function () {

         var idEscola = $(this).data('id');
         var modalidade = $(this).data('modalidade');
         var serie = $(this).data('serie');
         

         $(".modal-body #idEscola").val( idEscola );
         $(".modal-body #modalidade").val( modalidade );
         $(".modal-body #serie").val( serie );

 });