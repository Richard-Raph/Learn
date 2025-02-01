import pandas as pd

# Data from the images
data = [
    ["IDONGESIT MONDAY JAMES", "08166085861", "FIRST BANK", "3121770249"],
    ["ETORO THOMPSON AKPAN", "08189698827", "FIRST BANK", "3124597759"],
    ["ANIEKAN MONDAY JAMES", "07063350605", "FCMB", "6556407017"],
    ["EMMANUEL PENINNAH MONDAY", "09045813854", "", "3024931510"],
    ["NAOMI EMEM ANTHONY", "08163229446", "GTB", "0259693540"],
    ["IDARA BRENDAN PIUS", "08134742450", "ACCESS BANK", "0033613959"],
    ["LIDUAK BRENDAN AKPAN", "08081435987", "ZENITH BANK", "2284354581"],
    ["HARRISON BRENDAN PIUS", "09021362902", "ACCESS BANK", "0090475455"],
    ["ENELIA EFFIONG MAURICE", "07062634265", "ACCESS BANK", "0763062495"],
    ["ROSE VINCENT SUNDAY", "08064023399", "UNION BANK", "0201055197"],
    ["ANOINTE AKAI", "08036388378", "FIRST BANK", "3176183933"],
    ["BRIGHT JOSEPH EMMANDEAL", "09037690042", "WEMA BANK", "0246392161"],
    ["AKAI ANIEBLET ABASUBONG", "07037443294", "ZENITH BANK", "2083298907"],
    ["IDONGESTI OFONG EFFIONG", "07017441230", "ZENITH BANK", "2266025629"],
    ["ROBERT EDO EMEN", "08036227974", "UBA", "207888115"],
    ["OTO-OBONG DOMINIC ESSIET", "08022517946", "STANBIC BANK", "0013995907"],
    ["ESTHER ENE ETIM", "07033639800", "FCMB", "575075017"],
    ["OTO-OBONG PETER OKON", "08036102735", "ECO BANK", "4411026066"],
    ["IFIOK PAUL ARADERSON", "07061633676", "ACCESS BANK", "0100083900"],
    ["INDOBONG AMOS EXPO", "08165906158", "ACCESS BANK", "0069078388"],
    ["BRIGHT FRIDAY", "07108646749", "UBA", "2145802668"],
    ["JOHNNY FLORENCE AKPAN", "08171528619", "FCMB", "4338087011"],
    ["KUFFEE SUNDAY JOHN", "08101416730", "UBA", "2200481270"],
    ["SYLVANUS ETIM UNMI", "08124121548", "SUNTRUST BANK", "0025245445"],
    ["NSIDIBE SUNDAY JOHN", "08131284717", "UBA", "2288762164"],
    ["PATIENCE JOSEPH HARRY", "08060720814", "FIRST BANK", "3074015316"],
    ["ARCHIBONG KATE MICHEAL", "08144250048", "FIRST BANK", "3132175321"],
    ["LUCY MICHEAL ARCHIBONG", "08133693273", "ACCESS BANK", "1482927932"],
    ["OTO-OBONG UDO AKPAN", "07030932185", "ACCESS BANK", "8227962801"],
    ["BLESSING ANIEKAN SAM", "09135362612", "ZENITH BANK", "2082662507"],
    ["ELKANAH EDEN JAMES", "07030227951", "ZENITH BANK", "2213971232"],
    ["PATRICK SAMUEL UDO", "08071655518", "GTB", "0668628275"],
    ["ANIETTE BASSEY UDO", "07058655643", "UNION BANK", "0156692761"],
    ["COMFORT UDOMA STEPHEN", "08136197188", "FIRST BANK", "3031791103"],
    ["GRACE ANIETTE BASSEY", "08062915703", "UNION BANK", "0198307704"],
    ["GODWIN EDEM ASUQUO", "07018413742", "ACCESS BANK", "1378936018"],
    ["ABASTAMA EFFIONG OBOT", "08029569369", "FIRST BANK", "3079981230"],
    ["DARA INFON NELSON", "07019782758", "FIRST BANK", "309920699"],
    ["ENDBONG MONDAY JAMES", "09038188212", "USA", "2193087408"],
    ["ANLEFTOK MPON NELSON", "09044680907", "POLARIS BANK", "3086609151"],
    ["INSEIBE MPON NELSON", "07020274597", "FIRST BANK", "3136500442"],
    ["UNWANA MPON NELSON", "07011362498", "FIRST BANK", "3138889059"],
    ["MONDAY EFFIONG OBOT", "07062779749", "ECO BANK", "5741015785"],
    ["FITZABETH IFEOMA OUNMMADA", "08038674520", "ZENITH BANK", "2122295089"],
    ["ESTHER OKOKO SAM", "08032594959", "GTB", "0039652246"],
    ["COMFORT JOSEPH OKON", "07068619257", "FIRST BANK", "3201177081"],
    ["DORCAS UDENE OKON", "08107857050", "ACCESS BANK", "1223268833"],
    ["GRACE ITA ETIM", "07068921534", "ACCESS BANK", "1529755952"],
    ["NSIKAK TOM UMOREN", "09039956813", "ZENITH BANK", "4217141576"],
    ["JOHN IMAIKOP OROK", "08146940522", "ZENITH BANK", "2251174082"],
    ["ATAUDO ARCHIBONG EMMA", "08034438220", "ACCESS BANK", "0067170411"],
    ["HIKATE MICHEAL MACDBEE", "08063753633", "ZENITH BANK", "0826434362"],
    ["THERESA EFFIONG ETUK", "07041376347", "ACCESS BANK", "7049362183"],
    ["MICHEAL MACURLEY UDOH", "07049362193", "OPAY BANK", "8105478009"],
    ["MAGDALENE CLETUS GODWIN", "08105478009", "OPAY BANK", "6019859621"],
    ["PATRICIA CLETUS GODWIN", "08068249075", "FIDELITY BANK", "0163528370"],
    ["UBON KEVIN EXERE", "07057498563", "GTB", "2001191918"],
    ["ROSE CHRISTOPHER ERWERE", "08029569369", "FIRST BANK", "3079981230"],
    ["M'FON TNIBEHE INWEX", "1819867367", "", ""],
    ["TNIBEHE INWAK AKA", "1490955047", "", ""],
    ["ETIM UMOH UDOFIA", "2224449713", "", ""],
    ["KEMFON PATRICK UDO", "0688594845", "", ""],
    ["CHRISTOPHER A. ERWERE", "2001191918", "", ""],
    ["ROSE C. ERWERE", "0163538370", "", ""],
    ["AFONIME N. ERPO", "9013959270", "", ""],
    ["BLESSING ANTHONY WILLIAMS", "2229607932", "", ""],
    ["ANTHONY SOLOMON", "2236614037", "", ""],
    ["UDEME ITAM", "2134888820", "", ""],
    ["DAVID EDENERONG VICTOR", "1667992677", "", ""],
    ["AKPAN ENMANUEL UTIBE", "3150620991", "", ""],
    ["ETIMBUK THOMAS BOB", "2401291474", "", ""],
    ["TSARC JOSEPH OKON", "3156173705", "", ""],
    ["ENDURANCE JOSEPH OKON", "3113123948", "", ""],
    ["LIMOREIN MERCY DOMINIC", "6560059673", "", ""],
    ["ROSE ANIEITE OKON", "2006491387", "", ""],
    ["ROSE SUNDAY OKON", "2024117081", "", ""],
    ["INUMFON UDOMA STEPHEN", "0078979948", "", ""],
    ["OTO-OBONG UDO THOMAS", "2342407025", "", ""],
    ["NSIDIBE UDOMA OBOT", "1004713015", "", ""],
    ["ENO SUNDAY EFFLONG", "6025902804", "", ""],
    ["ISREAL MARCEL", "0024766533", "", ""],
    ["UDEME MFON GODWIN", "0169793745", "", ""],
    ["EMMAHUEL UDOEKONG", "0039992939", "", ""],
    ["ANEFLOK MFON NELSON", "3086609151", "", ""],
    ["GLFT KINGSLEY AMADI", "2715456092", "", ""],
    ["JOSEPH ELIZAH NAPAKI", "0859015034", "ZENITH BANK", ""],
    ["AUGUSTINE DOMINIC MICHAEL", "0742030245", "FIRST BANK", ""],
    ["EKOM DAVID ANDREW", "0994536686", "OPAY BANK", ""],
    ["KINGSLEY MALACHY GODWIN", "0819196149", "GTB", ""],
    ["OFONIME MALACHY GODWIN", "0814300589", "ACCESS BANK", ""],
    ["DOMINICA CHRISTOPHER EBOH", "0735425107", "ACCESS BANK", ""],
    ["ROSE ANLETTE EFFIONG", "0903741530", "OPAY BANK", ""],
    ["MARGARET CHRISTOPHER EBOH", "0805860639", "UBA", ""],
    ["BLESSING AMERICAN EFFIONG", "0835804195", "UBA", ""],
    ["HELEN JOHN EBOH", "0903451560", "OPAY BANK", ""],
    ["EMEM MICHAEL EFFIONG", "0816740987", "FIRST BANK", ""],
    ["HENRY JOHN EBOH", "08061521494", "ACCESS BANK", ""],
    ["ANNETTE EFFIONG UDOM", "08146748378", "FIRST BANK", ""],
    ["NSIKAK MICHAEL EFFIONG", "08163301540", "UBA", ""],
    ["PATRICIA DOMINIC EBOH", "09057457880", "ZENITH BANK", ""],
    ["MANDU SUNDAY EFFIONG", "07032569353", "FIRST BANK", ""],
    ["ETIENEOBONG ANLETTE AKPAN", "07032740601", "ZENITH BANK", ""],
    ["EDET EXPENO OKON", "07065623052", "FCMB", ""],
    ["BLESSING OFONG EFFIONG", "08082952902", "UNION BANK", ""],
    ["BLESSING JACOB EDEM", "07035294020", "ACCESS BANK", ""],
    ["CALEB UBONGABASI AKAT", "07042030245", "POLARIS BANK", ""],
    ["EDIONO INI UDOH", "08155565334", "POLARIS BANK", ""],
    ["BLESSING INI UDOH", "08080660521", "UBA", ""],
    ["UDOH UKPONO TOM-MARK", "08144252884", "FCMB", ""],
    ["UDEME JOSEPH EXPENYONG", "07067098993", "UBA", ""],
    ["ANIEMA ETIM UNOH", "08083875064", "UBA", ""],
    ["UNOH NYAKNO ETIM", "08140586819", "FCMB", ""]
]

# Create a DataFrame
df = pd.DataFrame(data, columns=["Name", "Phone Number", "Bank Name", "Account Number"])

# Save to Excel
with pd.ExcelWriter("list.xlsx", engine="xlsxwriter") as writer:
    df.to_excel(writer, index=False, sheet_name="Sheet1")
    
    # Get the xlsxwriter workbook and worksheet objects
    workbook  = writer.book
    worksheet = writer.sheets["Sheet1"]
    
    # Add borders to the cells
    border_format = workbook.add_format({"border": 1})
    worksheet.conditional_format(0, 0, len(df), len(df.columns) - 1, {"type": "no_blanks", "format": border_format})

print("Excel file created successfully with borders.")