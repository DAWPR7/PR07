/**
 * Bootstrap Table Catalan (Catalonia/Spain) translation
 * Author: Roger Catrisse
 */
(function ($) {
    'use strict';

    $.extend($.fn.bootstrapTable.defaults, {
        formatLoadingMessage: function () {
            return 'Cargando, espere un momento ...';
        },
        formatRecordsPerPage: function (pageNumber) {
            return pageNumber + ' registros por página';
        },
        formatShowingRows: function (pageFrom, pageTo, totalRows) {
            return 'Mostrant ' + pageFrom + ' a ' + pageTo + ' de ' + totalRows + ' files';
        },
        formatSearch: function () {
            return 'Buscar';
        },
        formatNoMatches: function () {
            return 'No se han encotrado registros';
        }
    });
})(jQuery);