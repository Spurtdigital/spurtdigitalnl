# AGENTS.md

## Doel
Deze codebase volgt een duidelijke, praktische WordPress + ACF werkwijze met minimale template-logic en maximale beheerbaarheid via Thema Opties.

## Werkwijze die altijd gevolgd moet worden

### 1) Dynamisch via ACF
- Maak content zoveel mogelijk dynamisch via ACF velden.
- Gebruik voor globale header/footer content ACF Thema Opties (options page).
- ACF veldgroepen altijd via `acf-json` beheren (geen PHP `acf_add_local_field_group` in het thema).
- Voor links altijd een ACF `link` veld gebruiken, niet aparte tekst- en URL-velden.
- Gebruik tabs met `placement: left` voor overzichtelijke secties (bijv. Header, Footer).

### 2) Template stijl: direct output
- In templates bij voorkeur direct `echo get_field(...)` gebruiken.
- Vermijd onnodige voorbereidende variabelen als het simpel inline kan.
- Alleen extra logic toevoegen als het nodig is voor veiligheid/structuur.

### 3) Buttons
- Hergebruik bestaande helpers:
  - `spurt_add_btns($btns, $parent_class = '')`
  - `spurt_render_btns($field_name, $parent_class = '', $is_sub_field = false)`
- Voor losse buttons in contentblokken: gebruik `spurt_add_btns` met 1-item array.
- Button component verwacht data-keys:
  - `link` (ACF link array)
  - `color` (bijv. `primary`, `secondary`, `dark`, `outline-white`, `outline-primary`)
  - `icon` (bijv. `arrow-right`, `phone`, `envelope`, `play`)

### 4) Icon buttons
- Icon-button stijl moet consistent zijn met header CTA (`btn-icon` + dubbele icon markup in component).
- Icoonkeuze komt uit ACF select met default `arrow-right`.

### 5) Markdown in titels
- Als `creators_markdown` beschikbaar is via plugin, die gebruiken voor velden die markdown ondersteunen.
- Niet opnieuw lokaal implementeren als plugin dit al levert.

### 6) Styling conventies
- Houd SCSS onderhoudbaar en schaalbaar.
- Gebruik dynamische constructies waar logisch (zoals `@for` voor spacers).
- Voor mixins exact Bootstrap parameternamen gebruiken (bijv. `$color-hover`, niet `$hover-color`).

### 7) Footer/Header content
- Header en footer content beheren via ACF Thema Opties.
- Footer bevat:
  - top titel/tekst
  - CTA afbeelding/link/tekst
  - over-ons titel/tekst
  - losse over-ons button (link/kleur/icoon)
  - 3 nav titels
  - copyright

### 8) Menus
- Menu locations die in templates gebruikt worden, ook registreren in setup.
- Voor footer kolommen zijn `footermenu`, `footermenu2`, `footermenu3` actief.

## Huidige projectkeuzes (samenvatting)
- Home Hero is dynamisch via ACF field group `Page Home`.
- Home Hero titel is tekstveld met markdown instructie (`**tekst**` of `__tekst__`).
- Home Hero buttons gebruiken repeater + component button rendering.
- Thema Opties pagina `spurt-theme-options` bestaat en bevat Header/Footer tabs.

## Bij twijfel
- Kies de meest simpele, beheerbare oplossing.
- Eerst bestaande helper/componenten hergebruiken, daarna pas nieuwe abstrahering toevoegen.
