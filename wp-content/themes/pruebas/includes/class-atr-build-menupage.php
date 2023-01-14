<?php

/**
 * Clase para manejar la creación de los menus y subemnus del tema
*/

class ATR_Build_Menupage{

    protected $menus;
    protected $submenus;

    public function __construct() {
        $this->menus    = [];
        $this->submenus = [];
    }

    public function add_menu_page($pageTitle, $menuTitle, $capability, $menuSlug, $functionName, $iconUrl = '', $position = null ) {

        $this->menus = $this->add_menu( $this->menus, $pageTitle, $menuTitle, $capability, $menuSlug, $functionName, $iconUrl, $position );

    }

    public function add_menu( $menus, $pageTitle, $menuTitle, $capability, $menuSlug, $functionName, $iconUrl, $position ) {

        $menus[] = [
            'pageTitle'   => $pageTitle,
            'menuTitle'   => $menuTitle,
            'capability'  => $capability,
            'menuSlug'    => $menuSlug,
            'function'    => $functionName,
            'iconUrl'     => $iconUrl,
            'position'    => $position
        ];

        return $menus;

    }

    public function add_submenu_page($parentSlug , $pageTitle, $subMenuTitle, $capability, $subMenuSlug, $functionName)
    {

        $this->submenus = $this->add_submenu( $this->submenus, $pageTitle, $subMenuTitle, $capability, $subMenuSlug, $functionName );

    }

    public function add_submenu($submenus, $parentSlug, $pageTitle, $subMenuTitle, $capability, $subMenuSlug, $functionName)
    {

        $submenus[] = [
            'pageTitle'   => $pageTitle,
            'menuTitle'   => $subMenuTitle,
            'capability'  => $capability,
            'menuSlug'    => $subMenuSlug,
            'function'    => $functionName
        ];

        return $submenus;
    }
}