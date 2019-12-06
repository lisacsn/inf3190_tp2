<?xml version="1.0" encoding="UTF-8" ?>

<!--  liste -->
<xsl:stylesheet version="1.0" 
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output encoding="UTF-8" indent="yes" method="html"/>
    <xsl:template match="/">
        <link rel="stylesheet" style="text/css" href="CSS/bootstrap.min.css"/>
            <h1>Historique des grèves</h1>
            <table class="table">
                <tr>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Cause</th>
                </tr>
                <xsl:for-each select="historique/greve">
                    <tr>
                        <td><xsl:value-of select="datedebut"/></td>
                        <td><xsl:value-of select="datefin"/></td>
                        <td><xsl:value-of select="cause"/></td>
                    </tr>
                </xsl:for-each>
            </table>
        </xsl:template>
</xsl:stylesheet>
