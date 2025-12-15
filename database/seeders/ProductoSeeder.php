<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('producto')->truncate(); 

        // Datos de Productos (21 registros)
        DB::table('producto')->insert([
            // ID 1: BOARD ASUS B550M-A AC WIFI
            [
                'idProducto' => 1,
                'nombreProducto' => 'BOARD ASUS B550M-A AC WIFI',
                'definicion' => 'se hizo un cambio', // Definición corta, marca 1 (ASUS)
                'idMarca' => 1,
                'valorProducto' => 542000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-03 18:25:16',
                'updated_at' => '2025-06-26 23:51:57',
            ],
            // ID 2: SanDisk Extreme Portable SSD 1TB
            [
                'idProducto' => 2,
                'nombreProducto' => 'SanDisk Extreme Portable SSD 1TB',
                'definicion' => 'Tipo: SSD externo portátil\r\n\r\nInterfaz: USB-C 3.2 Gen 2 (10 Gbps)\r\n\r\nVelocidad de lectura: Hasta 1000 MB/s\r\n\r\nResistencia: Certificación IP65 (resistente al agua y polvo)\r\n\r\nCompatibilidad: PS5, PC, Mac',
                'idMarca' => 17, // SanDisk
                'valorProducto' => 600000,
                'disponibilidad' => 1,
                'cantidadStock' => 99,
                'idProveedor' => 1,
                'created_at' => '2025-04-17 02:34:18',
                'updated_at' => '2025-06-27 05:23:51',
            ],
            // ID 3: Thermaltake Smart BX1 650W 80+ Bronze
            [
                'idProducto' => 3,
                'nombreProducto' => 'Thermaltake Smart BX1 650W 80+ Bronze',
                'definicion' => 'Potencia: 650W\r\n\r\nCertificación: 80 Plus Bronze\r\n\r\nConectores: 24 pines x1, 4+4 pines x1, SATA x6, PCI-E x2, periférico x4, FDD x1\r\n\r\nVentilador: 120mm silencioso',
                'idMarca' => 12, // THERMALTAKE
                'valorProducto' => 345000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-17 02:41:08',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 4: XPG PYLON 650W 80+ Bronze
            [
                'idProducto' => 4,
                'nombreProducto' => 'XPG PYLON 650W 80+ Bronze',
                'definicion' => 'Potencia: 650W\n\nCertificación: 80 Plus Bronze\n\nConectores: SATA x12, PCI-E x4, HDD x12, Floppy x1',
                'idMarca' => 15, // XPG
                'valorProducto' => 350000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-17 02:41:08',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 5: Intel Core i5-12400F (12ª Gen)
            [
                'idProducto' => 5,
                'nombreProducto' => 'Intel Core i5-12400F (12ª Gen)',
                'definicion' => 'Núcleos/Hilos: 6 núcleos, 12 hilos\n\nFrecuencia base: 2.5 GHz\n\nFrecuencia turbo: Hasta 4.4 GHz\n\nCaché: 18 MB Intel Smart Cache\n\nSocket: LGA 1700\n\nGráficos integrados: No\n\nIncluye disipador: Sí',
                'idMarca' => 13, // INTEL
                'valorProducto' => 590000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-17 02:41:08',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 6: Intel Core i5-13400 (13ª Gen)
            [
                'idProducto' => 6,
                'nombreProducto' => 'Intel Core i5-13400 (13ª Gen)',
                'definicion' => 'Núcleos/Hilos: 10 núcleos (6 Performance + 4 Efficient), 16 hilos\r\n\r\nFrecuencia base: 2.5 GHz\r\n\r\nCaché: 20 MB Intel Smart Cache\r\n\r\nSocket: LGA 1700\r\n\r\nGráficos integrados: Sí',
                'idMarca' => 13, // INTEL
                'valorProducto' => 1060000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-17 02:41:08',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 7: Teclado Mecánico Redragon Kumara K552
            [
                'idProducto' => 7,
                'nombreProducto' => 'Teclado Mecánico Redragon Kumara K552',
                'definicion' => 'Tipo: Mecánico\r\n\r\nSwitches: Outemu Blue (clicky)\r\n\r\nRetroiluminación: LED rojo\r\n\r\nConstrucción: Placa superior metálica\r\n\r\nConectividad: USB',
                'idMarca' => 9, // REDRAGON
                'valorProducto' => 150000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-17 02:41:08',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 8: Mouse Logitech G203 Lightsync
            [
                'idProducto' => 8,
                'nombreProducto' => 'Mouse Logitech G203 Lightsync',
                'definicion' => 'DPI: Hasta 8,000\r\n\r\nIluminación: RGB personalizable\r\n\r\nBotones programables: 6\r\n\r\nConectividad: USB\r\n\r\n',
                'idMarca' => 8, // LOGITECH
                'valorProducto' => 120000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-17 02:41:08',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 9: AMD Ryzen 5 5600X
            [
                'idProducto' => 9,
                'nombreProducto' => 'AMD Ryzen 5 5600X',
                'definicion' => 'Núcleos / Hilos: 6 núcleos / 12 hilos\r\n\r\nFrecuencia base / turbo: 3.7 GHz / hasta 4.6 GHz\r\n\r\nCaché: 32 MB L3\r\n\r\nSocket: AM4\r\n\r\nTDP: 65W\r\n\r\nGráficos integrados: No\r\n\r\nIncluye disipador: Sí, AMD Wraith Stealth',
                'idMarca' => 14, // AMD
                'valorProducto' => 700000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-17 02:41:08',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 10: AMD Ryzen 7 5800X
            [
                'idProducto' => 10,
                'nombreProducto' => 'AMD Ryzen 7 5800X',
                'definicion' => 'Núcleos / Hilos: 8 núcleos / 16 hilos\r\n\r\nFrecuencia base / turbo: 3.8 GHz / hasta 4.7 GHz\r\n\r\nCaché: 32 MB L3\r\n\r\nSocket: AM4\r\n\r\nTDP: 105W\r\n\r\nGráficos integrados: No\r\n\r\nIncluye disipador: No',
                'idMarca' => 14, // AMD
                'valorProducto' => 900000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-17 02:41:08',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 11: BOARD GIGABYTE B650 AORUS ELITE AX WiFi 3GPU
            [
                'idProducto' => 11,
                'nombreProducto' => 'BOARD GIGABYTE B650 AORUS ELITE AX WiFi 3GPU',
                'definicion' => 'El rendimiento incomparable de las placas base GIGABYTE está garantizado por un diseño térmico innovador y optimizado para garantizar la mejor estabilidad de CPU, chipset, SSD y bajas temperaturas bajo carga completa de aplicaciones y rendimiento de juegos.\r\n\r\nLas placas base GIGABYTE incluyen varios software útiles e intuitivos para ayudar a los usuarios a controlar cada aspecto de la placa base y proporcionar efectos de iluminación personalizables con una estética excepcional que se adapta a su personalidad única.\r\n\r\nEl diseño Ultra Durable™ de GIGABYTE proporciona durabilidad al producto y un proceso de fabricación de alta calidad. Las placas base GIGABYTE utilizan los mejores componentes y refuerzan cada ranura para que cada una de ellas sea sólida y duradera.\r\n\r\nAMD Socket AM5: Compatible con procesadores AMD Ryzen™ serie 7000/ Ryzen™ 8000\r\nRendimiento incomparable: solución VRM digital doble de 14*+2+1 fases\r\nDDR5 de doble canal: 4 * DIMM SMD con compatibilidad con módulos de memoria AMD EXPO™ e Intel® XMP\r\nAlmacenamiento de próxima generación: 1 * conectores PCIe 5.0 x4 y 2 * PCIe 4.0 x4 M.2\r\nHeatpipe completamente cubierto y protección térmica M.2: para garantizar la estabilidad de energía VRM y el rendimiento de SSD 25110 PCIe 5.0 M.2\r\nEZ-Latch: Ranura PCIe x16 y conectores M.2 con liberación rápida y diseño sin tornillos\r\nRedes rápidas: LAN de 2,5 GbE y Wi-Fi 6E 802.11ax\r\nConectividad extendida: DP, HDMI, USB-C® posterior de 10 Gb/s, USB-C® frontal de 20 Gb/s\r\nSmart Fan 6: cuenta con múltiples sensores de temperatura y cabezales de ventilador híbridos con FAN STOP\r\nQ-Flash Plus: actualice el BIOS sin instalar la CPU, la memoria y la tarjeta gráfica',
                'idMarca' => 3, // GIGABYTE
                'valorProducto' => 1109000,
                'disponibilidad' => 0, // Nota: Este producto tiene disponibilidad 0
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:16:21',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 12: BOARD MSI A520M-A PRO Micro USB3,2 A.V.R Pcie
            [
                'idProducto' => 12,
                'nombreProducto' => 'BOARD MSI A520M-A PRO Micro USB3,2 A.V.R Pcie',
                'definicion' => 'Las placas base MSI le permiten administrar velocidades y temperaturas para todos los ventiladores de su sistema y CPU. Total Fan Control le permite verificar las características de su sistema principal en una interfaz gráfica simplificada. También puede configurar hasta 4 objetivos de temperatura para la CPU y la placa base, que ajustarán las velocidades del ventilador automáticamente.\r\n\r\nLas placas base de la serie MSI PRO admiten los últimos estándares de almacenamiento, lo que permite a los usuarios conectar cualquier dispositivo de almacenamiento ultrarrápido. Una mayor eficiencia facilita su trabajo.\r\n\r\n \r\n\r\nCPU (soporte máximo): Admite procesadores de escritorio AMD Ryzen ™ de tercera generación y procesadores de escritorio AMD Ryzen ™ 4000 serie G.Socket: AMD Socket AM4.Chipset: Conjunto de chips AMD® A520.Memoria DDR4: Soporta DDR4 1866/2133/2400/2667/2800/2933/3000/3066/3200 MHz por JEDEC. Soporta DDR4 2667/2800/2933/3000/3066/3200/3466/3600/3733/3866/4000/4133/4266 / 4400/4600+ MHz por modo A-XMP OC\r\nCanal de memoria: Doble.Ranuras DIMM: 2.Memoria máxima (gb): 64.PCI-E X16: 1.PCI-E GEN: Gen3.PCI-E X1: 1.SATAIII: 4.Ranura M.2: 1.Redada: 0/1/10.TPM (encabezado): 1.LAN: 1x Realtek® RTL8111H Gigabit LAN.Puertos USB 3.2 (frontales): 2 (Gen 1, Tipo A).Puertos USB 3.2 (traseros): 4 (Gen 1, Tipo A).Puertos USB 2.0 (frontales): 4.Puertos USB 2.0 (traseros): 2 (tipo A).Puertos seriales (frontales): 1.Puertos de audio (traseros): Códec Realtek® ALC892 / ALC897.DVI-D: 1.HDMI: 1.Directx: 12.',
                'idMarca' => 2, // MSI
                'valorProducto' => 325000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:16:21',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 13: Board Gigabyte A520m Ds3h Ac Wifi A.V.R Pciex
            [
                'idProducto' => 13,
                'nombreProducto' => 'Board Gigabyte A520m Ds3h Ac Wifi A.V.R Pciex',
                'definicion' => 'El rendimiento incomparable de las placas base GIGABYTE está garantizado por un diseño térmico innovador y optimizado para garantizar la mejor estabilidad de CPU, chipset, SSD y bajas temperaturas bajo carga completa de aplicaciones y rendimiento de juegos.\r\n\r\nLas placas base GIGABYTE incluyen varios software útiles e intuitivos para ayudar a los usuarios a controlar cada aspecto de la placa base y proporcionar efectos de iluminación personalizables con una estética excepcional que se adapta a su personalidad única.\r\n\r\nEl diseño Ultra Durable™ de GIGABYTE proporciona durabilidad al producto y un proceso de fabricación de alta calidad. Las placas base GIGABYTE utilizan los mejores componentes y refuerzan cada ranura para que cada una de ellas sea sólida y duradera.\r\n\r\nAMD Socket AM5: Compatible con procesadores AMD Ryzen™ serie 7000/ Ryzen™ 8000',
                'idMarca' => 3, // GIGABYTE
                'valorProducto' => 449000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:19:46',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 14: Board Gigabyte Z890 Gaming X Wifi 3gpu Pci 5
            [
                'idProducto' => 14,
                'nombreProducto' => 'Board Gigabyte Z890 Gaming X Wifi 3gpu Pci 5',
                'definicion' => 'Admite procesadores Intel® Core™ Ultra (serie 2)\r\nSolución VRM de 16+1+2 fases de gemelo digital\r\nD5 Bionic Corsa para un rendimiento de memoria infinito\r\nAI Perfdrive : proporciona un perfil preestablecido de BIOS óptimo y personalizado para los usuarios\r\nCompatibilidad Premium : 4*DDR5 con soporte para módulo de memoria XMP\r\nWIFI EZ-Plug : Diseño rápido y sencillo para la instalación de antenas Wi-Fi\r\nEZ-Latch Plus : ranuras PCIe y M.2 con liberación rápida y diseño sin tornillos\r\nEZ-Latch Click : Disipadores de calor M.2 con diseño sin tornillos\r\nEnlace del panel del sensor : puerto de video integrado para una configuración sin complicaciones del panel en el chasis\r\nInterfaz de usuario amigable : múltiples temas, control de ventilador AIO y escaneo automático Q-Flash en BIOS y SW\r\nNuevo monitor de energía en HWinfo para la monitorización en tiempo real de las fases de energía de la CPU\r\nAlmacenamiento ultrarrápido : 4 ranuras M.2, incluida 1 PCIe 5.0 x4\r\nProtección térmica eficiente : VRM Thermal Armor Advanced y M.2 Thermal Guard\r\nRedes rápidas : LAN de 2,5 GbE y Wi-Fi 7 con antena direccional de ganancia ultraalta\r\nConectividad extendida : USB4 Tipo-C con DP-Alt, DisplayPort\r\nRanura PCIe UD X : ranura PCIe 5.0 x16 con potencia 10X para tarjeta gráfica',
                'idMarca' => 3, // GIGABYTE
                'valorProducto' => 1339000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:19:46',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 15: Caja Xpg Defender Pro Negra Vidrio Templado + 3 Fan Argb
            [
                'idProducto' => 15,
                'nombreProducto' => 'Caja Xpg Defender Pro Negra Vidrio Templado + 3 Fan Argb',
                'definicion' => 'Dimensiones (AL x AN x FO): 492 x 220 x 441 mm (19,37 x 8,66 x 17,36 pulgadas).Color: Exterior e interior: Negro.Material: SGCC.Paneles laterales: Panel lateral de vidrio templado de 3 mm.Factor de forma: Mini-ITX, Micro-ATX, ATX, E-ATX, CEB, EEB.Bandeja para unidades de disco duro y de estado sólido de 3,5″: 2.Bandeja para unidades de disco duro y de estado sólido de 2,5″: 2+2 (3,5”/2,5”combinado).Puerto de E/S: 2 USB 3.0, 1 puerto de audio híbrido, 1 botón de control de LED.Ventilador incluido: ARTE FRONTAL: 2 Ventilador ARGB de 120 mm XPG VENTO, ARTE TRASERA: 1 Ventilador ARGB de 120 mm XPG VENTO.\r\nSoporte del ventilador:\r\n\r\nLado frontal: 120mm x3, 140mm x2\r\nLado superior: 120mm x2, 140mm x2\r\nLado trasero: 120mm x1\r\nSoporte del radiador:\r\n\r\nLado frontal: 360 / 280 / 240mm x1\r\nLado superior: 280 / 240 / 120mm x1\r\nLado trasero: 120mm x1\r\nDistancia de seguridad:\r\n\r\nLimitación de la altura del refrigerador de la CPU: 170mm\r\nLimitación longitud de la tarjeta gráfica: 380mm\r\nLimitación de instalación vertical de la tarjeta gráfica: 27,3 mm\r\nLimitación de longitud de la unidad de fuente de alimentación: 220mm',
                'idMarca' => 15, // XPG
                'valorProducto' => 405000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:26:09',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 16: Caja Xpg Invader X Negra Vidrio Templado + 5 Argb + Riser 4.0
            [
                'idProducto' => 16,
                'nombreProducto' => 'Caja Xpg Invader X Negra Vidrio Templado + 5 Argb + Riser 4.0',
                'definicion' => 'Dimensiones (AL x AN x FO): 448 x 245 x 475 mm (17,64 x 9,65 x 18,70 pulg)\r\n\r\nColor: Negro\r\n\r\nMaterial: SPCC/ Vidrio templado de 3mm\r\n\r\nFactor de forma: ATX, Micro-ATX, Mini-ITX\r\n\r\nBandeja para unidades de disco duro y de estado sólido de 3.5″: 3 (HDD de 3,5″ o SSD de 2,5″)\r\n\r\nPuerto de E/S: USB 3.2 Tipo-C x 1, USB 3.2 Tipo-A x 2, Puerta de Áudio HD x 1, Interruptor x 1, Botón de reinicio x 1\r\n\r\nVentilador incluido: 5 x 120 mm (opcional según modelo), (4 ventiladores invertidos + 1 ventilador normal)\r\n\r\nSoporte del ventilador:\r\n\r\nTRASERO :120mm x 1 / 140mm x 1\r\nSUPERIOR:120 mm x 3 / 140 mm x 2\r\nLateral:120mm x 3\r\nInferior: 120mm x 1 / 140mm x 1\r\nProtector de PSU :120mm x 2\r\nSoporte del radiador:\r\n\r\nTRASERO:120mm\r\nSUPERIOR: Hasta 360mm\r\nLateral: Hasta 360mm (Sólo montaje vertical de la GPU)\r\nDistancia de seguridad:\r\n\r\nTarjeta gráfica:\r\n\r\n400mm (Montaje GPU vertical / horizontal sin radiador lateral)\r\n270 mm (montaje horizontal de GPU con radiador lateral) instalación vertical de la tarjeta gráfica: 30.5mm Altura del enfriador de la CPU: hasta 175 mm\r\nLongitud de la fuente de alimentación (PSU): hasta 240 mm',
                'idMarca' => 15, // XPG
                'valorProducto' => 709000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:26:09',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 17: Caja Corsair 2500x Vidrio Templado No Fan Blanca
            [
                'idProducto' => 17,
                'nombreProducto' => 'Caja Corsair 2500x Vidrio Templado No Fan Blanca',
                'definicion' => 'El chasis para PC de dos cámaras semitorre CORSAIR 2500X ofrece un flujo de aire y refrigeración excepcionales con paneles completamente de malla y un diseño de doble cámara lograr un diseño organizado e impresionante.\r\n\r\nDos cámaras para un aspecto estilizado\r\nMuchas opciones de personalización\r\nCompatibilidad con placas base mATX y mITX de conector inverso\r\nAmplia flexibilidad de refrigeración\r\nLibertad de elección tanto en el interior como en el exterior. Elija su diseño de refrigeración: opte por más cristal para mostrar sus componentes o un diseño de flujo de aire más sutil, en algo más que blanco o negro.\r\n\r\nLa 2500 Series puede albergar un PC potente con un tamaño impresionantemente pequeño. Asegúrese de que su diseño esté despejado, organizado y bien refrigerado en la cámara principal mientras oculta la guía para cables, las unidades de almacenamiento y la fuente de alimentación en la segunda cámara.\r\n\r\nAproveche la compatibilidad de la placa base con conector inverso (ASUS BTF, MSI PROJECT ZERO) e iCUE LINK y gane la guerra a los cables de una vez por todas.\r\n\r\nEl 2500X no solo tiene un diseño alucinante. Los soportes para ventiladores y radiadores alrededor garantizan un flujo de aire suficiente para cualquier diseño emblemático.\r\n\r\nPersonalice su configuración de refrigeración gracias al espacio para hasta 9 ventiladores de 120 mm o 6 de 140 mm. Incluye opciones versátiles de montaje de radiadores de hasta 240 mm en el lateral y hasta 360 mm en la parte superior e inferior.\r\n\r\n \r\n\r\nAltura de la caja: 376\r\n\r\nDuración del caso: 469\r\n\r\nAncho de caja: 304\r\n\r\nMaterial: Acero, vidrio templado, plástico.\r\n\r\nSoporte de placa base: Mini-ITX, Micro-ATX\r\n\r\nColor: Blanco\r\n\r\nPeso: 13.39\r\n\r\nCompatibilidad del radiador: 120 mm, 140 mm, 240 mm, 280 mm, 360 mm\r\n\r\nLongitud máxima de GPU: 400 mm\r\n\r\nAltura máxima del enfriador de CPU: 180 mm\r\n\r\nLongitud máxima de la fuente de alimentación: 225 mm\r\n\r\nRefrigeradores líquidos compatibles: H60, H100i, H115i, H150i (todas las series)\r\n\r\nTamaño de la caja: Torre intermedia\r\n\r\nFuente de alimentación de caja: ATX\r\n\r\nRanuras de expansión de la caja: 4 horizontales (4 verticales con accesorio)\r\n\r\nCaja frontal IO: (1x) USB 3.2 Gen 2 Tipo-C, (2x) USB 3.2 Gen 1 Tipo-A, (1x) Entrada/salida de audio\r\n\r\nVentana de caja: Vidrio templado\r\n\r\nBahías de unidad internas de 3,5″: 2\r\n\r\nBahías de unidad internas de 2,5″: 2\r\n\r\nSoporte del radiador – Superior: 360 mm, 280 mm, 240 mm\r\n\r\nSoporte de radiador delantero: Ninguno (Panel de vidrio)\r\n\r\nSoporte del radiador – inferior: 360 mm, 280 mm, 240 mm\r\n\r\nSoporte de radiador – lateral: 240 mm\r\n\r\nSoporte del radiador trasero: 120 mm\r\n\r\nSoporte de los fans – Top: 3 x 120 mm, 3 x 140 mm\r\n\r\nSoporte de ventilador – Delantero: Ninguno (Panel de vidrio)\r\n\r\nSoporte para ventiladores – Parte inferior: 3 x 120 mm, 3 x 140 mm\r\n\r\nSoporte de ventilador – Lateral: 2×120 mm\r\n\r\nSoporte de ventilador – Trasero: 1×120 mm\r\n\r\nConexiones de E/S frontales de la placa base: 1x audio HD; 1x USB 3.2 Gen1; 1x USB-3.2 Gen2 Tipo-E; 1x F_PANEL\r\n\r\nSoporte para placa base con conector inverso: Sí\r\n\r\nFiltración de polvo: Sí\r\n\r\nEspacio para enrutamiento de cables: 106 mm\r\n\r\nRapidRoute incluido: Compatible (se vende por separado)\r\n\r\nPanel lateral izquierdo: Vidrio templado\r\n\r\nPanel lateral derecho: Malla',
                'idMarca' => 4, // CORSAIR
                'valorProducto' => 695000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:30:04',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 18: Monitor Led Lg 34″ 2k Curvo Wqhd 160hz Hdr Pivot 34gp63a-B
            [
                'idProducto' => 18,
                'nombreProducto' => 'Monitor Led Lg 34″ 2k Curvo Wqhd 160hz Hdr Pivot 34gp63a-B',
                'definicion' => 'Una velocidad rápida de 160 Hz permite a los jugadores ver el siguiente cuadro rápidamente y hace que la imagen aparezca sin problemas. Los jugadores pueden responder rápidamente a los oponentes y apuntar al objetivo fácilmente.\r\n\r\n1 ms MBR ayuda a suavizar el juego, reduciendo el desenfoque y el efecto fantasma. Los objetos dinámicos y de ritmo rápido en medio de toda la acción pueden dar a los jugadores una ventaja competitiva.\r\n\r\nCon la tecnología FreeSync™ Premium, los jugadores pueden experimentar un movimiento fluido y continuo en juegos de alta resolución y ritmo rápido. Prácticamente reduce el desgarro y el tartamudeo de la pantalla.\r\n\r\nEste monitor admite un amplio espectro de colores, el 99% de la gama de colores sRGB, expresando colores de alta fidelidad para reproducir con HDR10, lo que permite una inmersión visual realista. Independientemente del campo de batalla, puede ayudar a los jugadores a ver los colores dramáticos que pretendían los desarrolladores del juego.\r\n\r\nEsta pantalla optimizada cuenta con un bisel delgado en tres lados y sin distracciones de la imagen deslumbrantemente precisa y realista, mientras que los parlantes estéreo de 7 W con MaxxAudio® completan su experiencia de juego inmersiva.',
                'idMarca' => 6, // LG
                'valorProducto' => 2149000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:30:04',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 19: Monitor Led Asus 32″ Tuf Gaming Vg32vq1b
            [
                'idProducto' => 19,
                'nombreProducto' => 'Monitor Led Asus 32″ Tuf Gaming Vg32vq1b',
                'definicion' => 'La tecnología ASUS Extreme Low Motion Blur (ELMB ™) permite un tiempo de respuesta de 1 ms (MPRT) junto con Adaptive-sync, eliminando las imágenes fantasmas y el desgarro para obtener imágenes de juego nítidas con altas velocidades de cuadro.\r\n\r\nTecnología FreeSync Premium compatible a través de puertos DP y HDMI que brindan frecuencias de actualización variables para baja latencia, sin tartamudeos y sin desgarros mientras se juega.\r\n\r\nShadow Boost mejora los detalles de la imagen en áreas oscuras, iluminando escenas sin sobreexponer áreas brillantes.',
                'idMarca' => 1, // ASUS
                'valorProducto' => 1415000,
                'disponibilidad' => 1,
                'cantidadStock' => 99,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:34:24',
                'updated_at' => '2025-06-27 05:23:51',
            ],
            // ID 20: Monitor Led Gigabyte 27″ Ssips Qhd 1ms-240Hz M27qx-Sa Ajustable
            [
                'idProducto' => 20,
                'nombreProducto' => 'Monitor Led Gigabyte 27″ Ssips Qhd 1ms-240Hz M27qx-Sa Ajustable',
                'definicion' => 'Como reproductor invisible, el monitor suele subestimarse. La verdad es que los monitores funcionan como un efecto sinérgico y sacan el máximo rendimiento de los componentes de PC. Los monitores para juegos de GIGABYTE ofrecen las mejores especificaciones y calidad, y los usuarios pueden disfrutar de un rendimiento de primera clase sin necesidad de extravagancias.\r\n\r\nLa función KVM le permite controlar varios dispositivos a través de un conjunto de teclado, video y mouse. Con nuestro botón KVM exclusivo, ¡cambiar de dispositivos no puede ser más fácil! ¡Es tan rápido como un chasquido!\r\n\r\nAlta resolución y frecuencia de actualización rápida, que le brinda una calidad de visualización detallada y una experiencia de juego fluida.\r\n\r\nLa compatibilidad con DisplayPort High Bit Rate 3 (HBR3) proporciona el ancho de banda para ofrecer la frecuencia de actualización más rápida del monitor, profundidad de color completa y efecto HDR al mismo tiempo.\r\n\r\nLa apariencia aerodinámica representa la simplicidad de la filosofía de diseño de la serie de juegos GIGABYTE, un soporte resistente y un acabado mate diseñados para características funcionales y estéticas que agregan más características.',
                'idMarca' => 3, // GIGABYTE
                'valorProducto' => 2029000,
                'disponibilidad' => 1,
                'cantidadStock' => 100,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:34:24',
                'updated_at' => '2025-06-26 23:52:19',
            ],
            // ID 21: Teclado Touch Inalámbrico Logitech K400 Smart Tv
            [
                'idProducto' => 21,
                'nombreProducto' => 'Teclado Touch Inalámbrico Logitech K400 Smart Tv',
                'definicion' => 'Disfruta de un control simplificado de tu sistema multimedia PC a TV, sin los inconvenientes de tener el teclado y el ratón por separado.Las teclas cómodas y silenciosas, así como el amplio touchpad (9 cm o 3,5 in), te permiten navegar con total facilidad.\r\n\r\nVe vídeos, navega en Internet, habla con tus amigos y mucho más sin molestas demoras o interrupciones.\r\n\r\nCon K400 Plus, te sentirás cómodo al instante. La distribución está diseñada para una interacción multimedia relajada.\r\n\r\nUsa K400 Plus nada más sacarlo de la caja, o personaliza la configuración de las teclas y el touchpad con el software Logitech Options.\r\n\r\n \r\n\r\nDimensiones:\r\nGeneral:\r\n\r\nAltura: 139,9 mm\r\nAnchura: 354,3 mm\r\nProfundidad: 23,5 mm\r\nPeso: 380 g (con pilas)\r\n Touchpad\r\n\r\nAltura: 76 mm\r\nAnchura: 47 mm\r\nRequisitos del sistema:\r\nWindows® 7, Windows 8, Windows 10 o posterior\r\nAndroid™ 5.0 o posterior\r\nChrome OS™\r\nPuerto USB\r\nEspecificaciones:\r\nTipo de conexión: Protocolo Logitech Unifying (2,4 GHz)\r\nBotones/Teclas especiales: Silencio y ajuste de volumen\r\nConexión/Encendido: Conmutador de encendido/apagado\r\nDetalles de las pilas: 2 pilas AA\r\nDuración de las pilas (no recargables): Hasta 18 meses\r\nDuración de las teclas: Hasta 5 millones de pulsaciones\r\nRuido al escribir: Hasta 55 dBA para todas las teclas\r\nRadio de acción inalámbrico: 10 m',
                'idMarca' => 8, // LOGITECH
                'valorProducto' => 155000,
                'disponibilidad' => 1,
                'cantidadStock' => 99,
                'idProveedor' => 1,
                'created_at' => '2025-04-22 01:34:24',
                'updated_at' => '2025-06-27 05:23:51',
            ],
        ]);
        
        // Ajustamos el AUTO_INCREMENT después del ID 21
        DB::statement('ALTER TABLE producto AUTO_INCREMENT = 22;');
    }
}
