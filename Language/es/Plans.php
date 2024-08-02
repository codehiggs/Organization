<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-02 09:54:24
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Organization\Views\Plans\Creator\index.php]
 * █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2024 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 * █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 * █                                             consulte la LICENCIA archivo que se distribuyó con este código fuente.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 * █ IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 * █ APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
 * █ LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
 * █ RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
 * █ AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
 * █ O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 * █ @Editor Anderson Ospina Lenis <andersonospina798@gmail.com>
 * █ @link https://www.codehiggs.com
 * █ @Version 1.5.0 @since PHP 7, PHP 8
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ Datos recibidos desde el controlador - @ModuleController
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @var object $parent
 * █ @var object $authentication
 * █ @var object $request
 * █ @var object $dates
 * █ @var string $component
 * █ @var string $view
 * █ @var string $oid
 * █ @var string $views
 * █ @var string $prefix
 * █ @var array $data
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
return [
    // - Plans fields
    "label_plan" => "Código del plan",
    "label_reference" => "Referencia institucional",
    "label_name" => "Nombre legible",
    "label_description" => "Descripción detallada del plan",
    "label_author" => "Autor",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_plan" => "Plan",
    "placeholder_reference" => "Ej: PI-202401",
    "placeholder_name" => "Ej: Plan estratégico de talento humano",
    "placeholder_description" => "Descripción",
    "placeholder_author" => "Autor",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_plan" => "Código automático",
    "help_reference" => "Código organizativo (Requerido)",
    "help_name" => "Nombre (Requerido)",
    "help_description" => "Descripción detallada del plan (Requerido)",
    "help_author" => "Autor",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Plans creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos planes. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, contacte al personal de soporte técnico para que le sean asignados los permisos necesarios, según sea el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-institutional-plan-title" => "Crear nuevo plan institucional",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "institutionals-plans-create-duplicate-title" => "¡Plan institucional existente!",
    "institutionals-plans-create-duplicate-message" => "Este plan ya estaba registrado anteriormente. Para regresar al listado general de planes, presione el botón continuar ubicado en la parte inferior de este mensaje.",
    "institutionals-plans-create-success-title" => "¡Plan institucional registrado exitosamente!",
    "institutionals-plans-create-success-message" => "El registro del plan institucional se completó con éxito. Para volver al listado general de planes institucionales, por favor presione el botón continuar ubicado en la parte inferior de este mensaje.",
    // - Plans viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar planes en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "institutionals-view-title" => "Plan institucional",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Plans editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar planes en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "organization-plans-edit-title" => "¡Actualizar plan!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o se eliminó previamente. Para retornar al listado general de planes, presione continuar en la parte inferior de este mensaje. ",
    "edit-success-title" => "¡Plan actualizado!",
    "edit-success-message" => "Los datos del plan se <b>actualizaron exitosamente</b>. Para retornar al listado general de planes, presione el botón continuar en la parte inferior del presente mensaje.",
    // - Plans deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar planes en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "organization-plans-delete-title" => "¡Eliminar plan institucional!",
    "delete-message" => "Para confirmar la eliminación del plan institucional <b>%s</b>, presioné eliminar. Para retornar al listado general de planes, presioné cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de planes, presione continuar en la parte inferior de este mensaje.",
    "organization-plans-delete-success-title" => "¡Plan institucional eliminado exitosamente!",
    "organization-plans-delete-success-message" => "El plan institucional se eliminó exitosamente. Para retornar al listado general de planes institucionales, presione el botón continuar en la parte inferior de este mensaje.",
    // - Plans list
    "organization-plans-list-alert" => "Los planes institucionales son documentos estratégicos que una organización, especialmente en el ámbito del sector público, elabora para establecer sus objetivos, estrategias, políticas y procedimientos con el fin de alcanzar sus metas a corto, mediano y largo plazo. Estos planes detallan las acciones que la institución planea llevar a cabo en un período determinado, así como los recursos necesarios para su implementación. Además, son citados en múltiples contextos, como informes de gestión, auditorías y revisiones de desempeño.",
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de planes en esta plataforma. Contacte al departamento de soporte técnico para información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "organization-plans-list-title" => "Listado general de planes institucionales",
];

?>