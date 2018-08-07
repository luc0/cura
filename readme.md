## TODO
[x] - Chequear porque el buscar por tags devuelve TODO

#### Modelos

Lo importante es el modelo `benefits` Ahí se especifica:
- Para QUÉ es beneficioso: 
    - Zona del cuerpo `Body`
    - Enfermedad `Disease`
- Una `description` que indica en que consiste el beneficio.
- Los `tags` sirve para busquedas. (traer relacionados, evitamos hacer relaciones complejas de relaciones)

### Porque?
- De esta forma se puede reutilizar los beneficios que coincidan.
- Separar beneficios que tengan distinta descripción, pero actuan sobre lo mismo.
Ej. 
    - Una postura de yoga puede explicar que con la circulación de sangre a la cabeza, mejora la oxigenación,
    - Una aspirina puede explicar que su función es dilatar los vasos sanguíneos.
- Otro motivo es simplemente usar Morphs! :D (de capricho) ya que si bien es muy útil cómo estan armadas las relaciones,
la complejidad que implica es muchisimo mas pesada que los beneficios. Eso sin contar que los tags aveces se van a repetir.