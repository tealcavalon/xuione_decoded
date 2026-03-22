<?php


function readChunked($F48d5724f3b4ec96)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  32  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  34  JMP/42                    ?0        ?18                  ?0                  	;0	>>18
	2  36  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'feof'            	;1
	3  36  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	4  36  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	5  36  JMPZ/43                   ?0        $3                   ?7                  	;0	>>7
	6  37  GOTO/253                  ?0        ?30                  ?3                  	;0
	7  39  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'fread'           	;2	<<5
	8  39  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	9  39  SEND_VAL_EX/116           ?96       6:1048576            ?2                  	;0
	10 39  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	11 39  ASSIGN/38                 ?2        16?2                 $4                  	;0
	12 40  ECHO/40                   ?0        16?2                 ?0                  	;0
	13 41  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'ob_flush'        	;0
	14 41  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
	15 42  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'flush'           	;0
	16 42  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	17 43  GOTO/253                  ?0        ?29                  ?11                 	;0
	18 45  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'fopen'          	;2	<<1
	19 45  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	20 45  SEND_VAL_EX/116           ?96       14:'rb'              ?2                  	;0
	21 45  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	22 45  ASSIGN/38                 ?6        16?1                 $8                  	;0
	23 46  IS_IDENTICAL/15           #10=      16?1                 15:false            	;0
	24 46  BOOL_NOT/13               #11=      #10                  ?0                  	;0
	25 46  JMPZ/43                   ?0        #11                  ?27                 	;0	>>27
	26 47  GOTO/253                  ?0        ?28                  ?16                 	;0
	27 49  RETURN/62                 ?0        17:false             ?0                  	;0	<<25
	28 52  GOTO/253                  ?0        ?2                   ?18                 	;0
	29 54  GOTO/253                  ?0        ?28                  ?19                 	;0
	30 56  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'fclose'         	;1
	31 56  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	32 56  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	33 56  RETURN/62                 ?0        $12                  ?0                  	;0
	34 57  GOTO/253                  ?0        ?35                  ?22                 	;0
	35 59  NOP/0                     ?0        23:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   285  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   285  BIND_GLOBAL/168           ?0        16?1                 1:'f76e05a7b2c4a341'	;0
	2   285  BIND_GLOBAL/168           ?0        16?2                 2:'E59d0debc75e7be8'	;0
	3   285  BIND_GLOBAL/168           ?0        16?3                 3:'cd3f9ed18bcee9bd'	;0
	4   286  BOOL_NOT/13               #4=       16?1                 ?0                  	;0
	5   286  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
	6   287  GOTO/253                  ?0        ?9                   ?4                  	;0
	7   289  INIT_STATIC_METHOD_CALL/113 ?0        5:'XUI'              7:'AEeA5d3137274f80'	;0	<<5
	8   289  DO_FCALL/60               ?1        ?0                   ?0                  	;0
	9   291  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'is_object'       	;1
	10  291  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	11  291  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	12  291  BOOL_NOT/13               #7=       $6                   ?0                  	;0
	13  291  JMPZ/43                   ?0        #7                   ?15                 	;0	>>15
	14  292  GOTO/253                  ?0        ?17                  ?11                 	;0
	15  294  INIT_METHOD_CALL/112      ?0        16?0                 12:'close_mysql'    	;0	<<13
	16  294  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	17  296  BOOL_NOT/13               #9=       16?3                 ?0                  	;0
	18  296  JMPZ/43                   ?0        #9                   ?20                 	;0	>>20
	19  297  GOTO/253                  ?0        ?27                  ?14                 	;0
	20  299  INIT_STATIC_METHOD_CALL/113 ?0        15:'XUI'             17:'F655a951d8e1E798'	;3	<<18
	21  299  SEND_VAL_EX/116           ?80       19:'epg'             ?1                  	;0
	22  299  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	23  299  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'getmypid'       	;0
	24  299  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	25  299  SEND_VAR_NO_REF_EX/50     ?112      $10                  ?3                  	;0
	26  299  DO_FCALL/60               ?7        ?0                   ?0                  	;0
	27  301  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?283                 ?0                  	;0	>>283
1   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'sort'            	;1
2   6    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
3   6    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'md5'             	;1
5   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'implode'         	;2
6   7    SEND_VAL_EX/116           ?80       7:'_'                ?1                  	;0
7   7    SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
8   7    DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
9   7    SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
10  7    DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
11  7    ASSIGN/38                 ?3        16?1                 $18                 	;0
12  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'file_exists'     	;1
13  8    FETCH_CONSTANT/99         #20=      ?0                   10:'EPG_PATH'       	;16
14  8    ROPE_INIT/54              #22=      ?0                   13:'epg_'           	;3
15  8    ROPE_ADD/55               #22=      #22                  16?1                	;1
16  8    ROPE_END/56               #21=      #22                  14:'.xml'           	;2
17  8    CONCAT/8                  #24=      #20                  #21                 	;0
18  8    SEND_VAL_EX/116           ?80       #24                  ?1                  	;0
19  8    DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
20  8    JMPZ/43                   ?0        $25                  ?22                 	;0	>>22
21  9    GOTO/253                  ?0        ?175                 ?15                 	;0
22  11   FETCH_CONSTANT/99         #26=      ?0                   16:'EPG_PATH'       	;16	<<20
23  11   CONCAT/8                  #27=      #26                  19:'epg_all.xml'    	;0
24  11   ASSIGN/38                 ?12       16?2                 #27                 	;0
25  12   GOTO/253                  ?0        ?174                 ?20                 	;0
26  15   FETCH_DIM_R/81            $29=      16?3                 21:'isp_violate'    	;0
27  15   IS_EQUAL/17               #30=      $29                  22:1                	;0
28  15   BOOL_NOT/13               #31=      #30                  ?0                  	;0
29  15   JMPZ/43                   ?0        #31                  ?31                 	;0	>>31
30  16   GOTO/253                  ?0        ?34                  ?23                 	;0
31  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'generateError'  	;1	<<29
32  18   SEND_VAL_EX/116           ?80       26:'ISP_BLOCKED'     ?1                  	;0
33  18   DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
34  20   FETCH_DIM_R/81            $33=      16?3                 27:'isp_is_server'  	;0
35  20   IS_EQUAL/17               #34=      $33                  28:1                	;0
36  20   JMPZ_EX/46                #34=      #34                  ?40                 	;0	>>40
37  20   FETCH_DIM_R/81            $35=      16?3                 29:'is_restreamer'  	;0
38  20   BOOL_NOT/13               #36=      $35                  ?0                  	;0
39  20   BOOL/52                   #34=      #36                  ?0                  	;0
40  20   BOOL_NOT/13               #37=      #34                  ?0                  	;0	<<36
41  20   JMPZ/43                   ?0        #37                  ?43                 	;0	>>43
42  21   GOTO/253                  ?0        ?381                 ?30                 	;0
43  23   GOTO/253                  ?0        ?378                 ?31                 	;0	<<41
44  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'strtolower'     	;1
45  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'explode'        	;2
46  25   SEND_VAL_EX/116           ?80       36:'.'               ?1                  	;0
47  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'ltrim'          	;2
48  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'parse_url'      	;1
49  25   FETCH_FUNC_ARG/92         $38=      41:'_SERVER'         ?0                  	;1
50  25   FETCH_DIM_FUNC_ARG/93     $39=      $38                  42:'REQUEST_URI'    	;1
51  25   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
52  25   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
53  25   SEPARATE/156              $40=      $40                  ?0                  	;0
54  25   FETCH_DIM_FUNC_ARG/93     $41=      $40                  43:'path'           	;1
55  25   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
56  25   SEND_VAL_EX/116           ?96       44:'/'               ?2                  	;0
57  25   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
58  25   SEND_VAR_NO_REF_EX/50     ?96       $42                  ?2                  	;0
59  25   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
60  25   SEPARATE/156              $43=      $43                  ?0                  	;0
61  25   FETCH_DIM_FUNC_ARG/93     $44=      $43                  45:0                	;1
62  25   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
63  25   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
64  25   IS_EQUAL/17               #46=      $45                  46:'xmltv'          	;0
65  25   JMPZ_EX/46                #46=      #46                  ?70                 	;0	>>70
66  25   FETCH_STATIC_PROP_R/173   $47=      47:'rSettings'       48:'XUI'            	;0
67  25   FETCH_DIM_R/81            $48=      $47                  50:'legacy_xmltv'   	;0
68  25   BOOL_NOT/13               #49=      $48                  ?0                  	;0
69  25   BOOL/52                   #46=      #49                  ?0                  	;0
70  25   BOOL_NOT/13               #50=      #46                  ?0                  	;0	<<65
71  25   JMPZ/43                   ?0        #50                  ?73                 	;0	>>73
72  26   GOTO/253                  ?0        ?77                  ?51                 	;0
73  28   ASSIGN/38                 ?35       16?4                 52:false            	;0	<<71
74  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'generateError'  	;1
75  29   SEND_VAL_EX/116           ?80       55:'LEGACY_EPG_DISABLED' ?1                  	;0
76  29   DO_FCALL_BY_NAME/131      ?36       ?0                   ?0                  	;0
77  32   NOP/0                     ?0        ?0                   ?0                  	;0
78  60   GOTO/253                  ?0        ?402                 ?56                 	;0
79  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'generateError'  	;1
80  62   SEND_VAL_EX/116           ?80       59:'NOT_IN_ALLOWED_COUNTRY' ?1                  	;0
81  62   DO_FCALL_BY_NAME/131      ?37       ?0                   ?0                  	;0
82  65   ISSET_ISEMPTY_DIM_OBJ/115 #54=      16?3                 60:'allowed_ua'     	;16777216
83  65   BOOL_NOT/13               #55=      #54                  ?0                  	;0
84  65   JMPZ_EX/46                #55=      #55                  ?92                 	;0	>>92
85  65   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'in_array'       	;2
86  65   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
87  65   FETCH_DIM_FUNC_ARG/93     $56=      16?3                 63:'allowed_ua'     	;2
88  65   SEND_VAR_EX/66            ?96       $56                  ?2                  	;0
89  65   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
90  65   BOOL_NOT/13               #58=      $57                  ?0                  	;0
91  65   BOOL/52                   #55=      #58                  ?0                  	;0
92  65   BOOL_NOT/13               #59=      #55                  ?0                  	;0	<<84
93  65   JMPZ/43                   ?0        #59                  ?95                 	;0	>>95
94  66   GOTO/253                  ?0        ?26                  ?64                 	;0
95  68   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'generateError'  	;1	<<93
96  68   SEND_VAL_EX/116           ?80       67:'NOT_IN_ALLOWED_UAS' ?1                  	;0
97  68   DO_FCALL_BY_NAME/131      ?44       ?0                   ?0                  	;0
98  69   GOTO/253                  ?0        ?26                  ?68                 	;0
99  71   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'header'         	;1
100 71   SEND_VAL_EX/116           ?80       71:'Content-Type: application/octet-stream' ?1                  	;0
101 71   DO_FCALL_BY_NAME/131      ?45       ?0                   ?0                  	;0
102 72   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'header'         	;1
103 72   SEND_VAL_EX/116           ?80       74:'Content-Transfer-Encoding: Binary' ?1                  	;0
104 72   DO_FCALL_BY_NAME/131      ?46       ?0                   ?0                  	;0
105 74   INIT_FCALL/61             ?0        ?288                 75:'readchunked'    	;1
106 74   SEND_VAR/117              ?80       16?2                 ?1                  	;0
107 74   DO_FCALL/60               ?47       ?0                   ?0                  	;0
108 76   GOTO/253                  ?0        ?366                 ?76                 	;0
109 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'generateError'  	;1
110 78   SEND_VAL_EX/116           ?80       79:'INVALID_CREDENTIALS' ?1                  	;0
111 78   DO_FCALL_BY_NAME/131      ?48       ?0                   ?0                  	;0
112 79   GOTO/253                  ?0        ?367                 ?80                 	;0
113 81   ASSIGN/38                 ?49       16?4                 81:false            	;0
114 82   FETCH_DIM_R/81            $66=      16?3                 82:'is_restreamer'  	;0
115 82   BOOL_NOT/13               #67=      $66                  ?0                  	;0
116 82   JMPZ_EX/46                #67=      #67                  ?120                	;0	>>120
117 82   FETCH_STATIC_PROP_R/173   $68=      83:'rSettings'       84:'XUI'            	;0
118 82   FETCH_DIM_R/81            $69=      $68                  86:'disable_xmltv'  	;0
119 82   BOOL/52                   #67=      $69                  ?0                  	;0
120 82   BOOL_NOT/13               #70=      #67                  ?0                  	;0	<<116
121 82   JMPZ/43                   ?0        #70                  ?123                	;0	>>123
122 83   GOTO/253                  ?0        ?127                 ?87                 	;0
123 85   GOTO/253                  ?0        ?124                 ?88                 	;0	<<121
124 87   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'generateError'  	;1
125 87   SEND_VAL_EX/116           ?80       91:'EPG_DISABLED'    ?1                  	;0
126 87   DO_FCALL_BY_NAME/131      ?55       ?0                   ?0                  	;0
127 89   FETCH_DIM_R/81            $72=      16?3                 92:'is_restreamer'  	;0
128 89   JMPZ_EX/46                #73=      $72                  ?132                	;0	>>132
129 89   FETCH_STATIC_PROP_R/173   $74=      93:'rSettings'       94:'XUI'            	;0
130 89   FETCH_DIM_R/81            $75=      $74                  96:'disable_xmltv_restreamer'	;0
131 89   BOOL/52                   #73=      $75                  ?0                  	;0
132 89   BOOL_NOT/13               #76=      #73                  ?0                  	;0	<<128
133 89   JMPZ/43                   ?0        #76                  ?135                	;0	>>135
134 90   GOTO/253                  ?0        ?138                 ?97                 	;0
135 92   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'generateError'  	;1	<<133
136 92   SEND_VAL_EX/116           ?80       100:'EPG_DISABLED'   ?1                  	;0
137 92   DO_FCALL_BY_NAME/131      ?61       ?0                   ?0                  	;0
138 94   GOTO/253                  ?0        ?211                 ?101                	;0
139 96   BOOL_NOT/13               #78=      16?6                 ?0                  	;0
140 96   JMPZ/43                   ?0        #78                  ?142                	;0	>>142
141 97   GOTO/253                  ?0        ?144                 ?102                	;0
142 99   ASSIGN_CONCAT/30          ?63       16?2                 103:'.gz'           	;0	<<140
143 100  ASSIGN_CONCAT/30          ?64       16?7                 104:'.gz'           	;0
144 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'file_exists'   	;1
145 102  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
146 102  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
147 102  JMPZ/43                   ?0        $81                  ?149                	;0	>>149
148 103  GOTO/253                  ?0        ?252                 ?107                	;0
149 105  GOTO/253                  ?0        ?248                 ?108                	;0	<<147
150 108  ISSET_ISEMPTY_DIM_OBJ/115 #82=      16?3                 109:'allowed_ips'   	;16777216
151 108  BOOL_NOT/13               #83=      #82                  ?0                  	;0
152 108  JMPZ_EX/46                #83=      #83                  ?164                	;0	>>164
153 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'in_array'      	;2
154 108  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
155 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'array_map'     	;2
156 108  SEND_VAL_EX/116           ?80       114:'gethostbyname'  ?1                  	;0
157 108  FETCH_DIM_FUNC_ARG/93     $84=      16?3                 115:'allowed_ips'   	;2
158 108  SEND_VAR_EX/66            ?96       $84                  ?2                  	;0
159 108  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
160 108  SEND_VAR_NO_REF_EX/50     ?96       $85                  ?2                  	;0
161 108  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
162 108  BOOL_NOT/13               #87=      $86                  ?0                  	;0
163 108  BOOL/52                   #83=      #87                  ?0                  	;0
164 108  BOOL_NOT/13               #88=      #83                  ?0                  	;0	<<152
165 108  JMPZ/43                   ?0        #88                  ?167                	;0	>>167
166 109  GOTO/253                  ?0        ?170                 ?116                	;0
167 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'generateError' 	;1	<<165
168 111  SEND_VAL_EX/116           ?80       119:'NOT_IN_ALLOWED_IPS' ?1                  	;0
169 111  DO_FCALL_BY_NAME/131      ?73       ?0                   ?0                  	;0
170 113  ISSET_ISEMPTY_CV/197      #90=      16?9                 ?0                  	;16777216
171 113  JMPZ/43                   ?0        #90                  ?173                	;0	>>173
172 114  GOTO/253                  ?0        ?82                  ?120                	;0
173 116  GOTO/253                  ?0        ?295                 ?121                	;0	<<171
174 118  GOTO/253                  ?0        ?181                 ?122                	;0
175 120  FETCH_CONSTANT/99         #91=      ?0                   123:'EPG_PATH'      	;16
176 120  ROPE_INIT/54              #93=      ?0                   126:'epg_'          	;3
177 120  ROPE_ADD/55               #93=      #93                  16?1                	;1
178 120  ROPE_END/56               #92=      #93                  127:'.xml'          	;2
179 120  CONCAT/8                  #95=      #91                  #92                 	;0
180 120  ASSIGN/38                 ?80       16?2                 #95                 	;0
181 122  ASSIGN/38                 ?81       16?7                 128:'epg.xml'       	;0
182 123  GOTO/253                  ?0        ?139                 ?129                	;0
183 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'is_null'       	;1
184 125  FETCH_DIM_FUNC_ARG/93     $98=      16?3                 132:'exp_date'      	;1
185 125  SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
186 125  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
187 125  BOOL_NOT/13               #100=     $99                  ?0                  	;0
188 125  JMPZ_EX/46                #100=     #100                 ?194                	;0	>>194
189 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'time'          	;0
190 125  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
191 125  FETCH_DIM_R/81            $102=     16?3                 135:'exp_date'      	;0
192 125  IS_SMALLER_OR_EQUAL/20    #103=     $102                 $101                	;0
193 125  BOOL/52                   #100=     #103                 ?0                  	;0
194 125  BOOL_NOT/13               #104=     #100                 ?0                  	;0	<<188
195 125  JMPZ/43                   ?0        #104                 ?197                	;0	>>197
196 126  GOTO/253                  ?0        ?200                 ?136                	;0
197 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'generateError' 	;1	<<195
198 128  SEND_VAL_EX/116           ?80       139:'EXPIRED'        ?1                  	;0
199 128  DO_FCALL_BY_NAME/131      ?89       ?0                   ?0                  	;0
200 130  FETCH_DIM_R/81            $106=     16?3                 140:'is_mag'        	;0
201 130  JMPNZ_EX/47               #107=     $106                 ?204                	;0	>>204
202 130  FETCH_DIM_R/81            $108=     16?3                 141:'is_e2'         	;0
203 130  BOOL/52                   #107=     $108                 ?0                  	;0
204 130  BOOL_NOT/13               #109=     #107                 ?0                  	;0	<<201
205 130  JMPZ/43                   ?0        #109                 ?207                	;0	>>207
206 131  GOTO/253                  ?0        ?368                 ?142                	;0
207 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'generateError' 	;1	<<205
208 133  SEND_VAL_EX/116           ?80       145:'DEVICE_NOT_ALLOWED' ?1                  	;0
209 133  DO_FCALL_BY_NAME/131      ?94       ?0                   ?0                  	;0
210 134  GOTO/253                  ?0        ?368                 ?146                	;0
211 136  FETCH_DIM_R/81            $111=     16?3                 147:'bypass_ua'     	;0
212 136  IS_EQUAL/17               #112=     $111                 148:0               	;0
213 136  BOOL_NOT/13               #113=     #112                 ?0                  	;0
214 136  JMPZ/43                   ?0        #113                 ?216                	;0	>>216
215 137  GOTO/253                  ?0        ?226                 ?149                	;0
216 139  INIT_STATIC_METHOD_CALL/113 ?0        150:'XUI'            152:'BD0C896A193633Eb'	;2	<<214
217 139  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
218 139  SEND_VAL_EX/116           ?96       154:true             ?2                  	;0
219 139  DO_FCALL/60               $114=     ?0                   ?0                  	;0
220 139  BOOL_NOT/13               #115=     $114                 ?0                  	;0
221 139  JMPZ/43                   ?0        #115                 ?223                	;0	>>223
222 140  GOTO/253                  ?0        ?226                 ?155                	;0
223 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'generateError' 	;1	<<221
224 142  SEND_VAL_EX/116           ?80       158:'BLOCKED_USER_AGENT' ?1                  	;0
225 142  DO_FCALL_BY_NAME/131      ?100      ?0                   ?0                  	;0
226 145  GOTO/253                  ?0        ?183                 ?159                	;0
227 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'generateError' 	;1
228 147  SEND_VAL_EX/116           ?80       162:'DISABLED'       ?1                  	;0
229 147  DO_FCALL_BY_NAME/131      ?101      ?0                   ?0                  	;0
230 149  FETCH_STATIC_PROP_R/173   $118=     163:'rSettings'      164:'XUI'           	;0
231 149  FETCH_DIM_R/81            $119=     $118                 166:'restrict_playlists'	;0
232 149  BOOL_NOT/13               #120=     $119                 ?0                  	;0
233 149  JMPZ/43                   ?0        #120                 ?235                	;0	>>235
234 150  GOTO/253                  ?0        ?381                 ?167                	;0
235 152  ISSET_ISEMPTY_CV/197      #121=     16?5                 ?0                  	;16777216	<<233
236 152  JMPZ_EX/46                #121=     #121                 ?241                	;0	>>241
237 152  FETCH_STATIC_PROP_R/173   $122=     168:'rSettings'      169:'XUI'           	;0
238 152  FETCH_DIM_R/81            $123=     $122                 171:'disallow_empty_user_agents'	;0
239 152  IS_EQUAL/17               #124=     $123                 172:1               	;0
240 152  BOOL/52                   #121=     #124                 ?0                  	;0
241 152  BOOL_NOT/13               #125=     #121                 ?0                  	;0	<<236
242 152  JMPZ/43                   ?0        #125                 ?244                	;0	>>244
243 153  GOTO/253                  ?0        ?150                 ?173                	;0
244 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'generateError' 	;1	<<242
245 155  SEND_VAL_EX/116           ?80       176:'EMPTY_USER_AGENT' ?1                  	;0
246 155  DO_FCALL_BY_NAME/131      ?110      ?0                   ?0                  	;0
247 156  GOTO/253                  ?0        ?150                 ?177                	;0
248 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'generateError' 	;1
249 158  SEND_VAL_EX/116           ?80       180:'EPG_FILE_MISSING' ?1                  	;0
250 158  DO_FCALL_BY_NAME/131      ?111      ?0                   ?0                  	;0
251 159  GOTO/253                  ?0        ?366                 ?181                	;0
252 161  INIT_STATIC_METHOD_CALL/113 ?0        182:'XUI'            184:'Bc4858BA4C3CD1fd'	;3
253 161  SEND_VAL_EX/116           ?80       186:'epg'            ?1                  	;0
254 161  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
255 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'getmypid'      	;0
256 161  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
257 161  SEND_VAR_NO_REF_EX/50     ?112      $128                 ?3                  	;0
258 161  DO_FCALL/60               $129=     ?0                   ?0                  	;0
259 161  JMPZ/43                   ?0        $129                 ?261                	;0	>>261
260 162  GOTO/253                  ?0        ?436                 ?189                	;0
261 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'generateError' 	;2	<<259
262 164  SEND_VAL_EX/116           ?80       192:'DOWNLOAD_LIMIT_REACHED' ?1                  	;0
263 164  SEND_VAL_EX/116           ?96       193:false            ?2                  	;0
264 164  DO_FCALL_BY_NAME/131      ?114      ?0                   ?0                  	;0
265 165  GOTO/253                  ?0        ?431                 ?194                	;0
266 167  FETCH_STATIC_PROP_R/173   $131=     195:'rRequest'       196:'XUI'           	;0
267 167  FETCH_DIM_R/81            $132=     $131                 198:'username'      	;0
268 167  ASSIGN/38                 ?117      16?10                $132                	;0
269 168  FETCH_STATIC_PROP_R/173   $134=     199:'rRequest'       200:'XUI'           	;0
270 168  FETCH_DIM_R/81            $135=     $134                 202:'password'      	;0
271 168  ASSIGN/38                 ?120      16?11                $135                	;0
272 169  ISSET_ISEMPTY_CV/197      #137=     16?10                ?0                  	;16777216
273 169  JMPNZ_EX/47               #137=     #137                 ?276                	;0	>>276
274 169  ISSET_ISEMPTY_CV/197      #138=     16?11                ?0                  	;16777216
275 169  BOOL/52                   #137=     #138                 ?0                  	;0
276 169  BOOL_NOT/13               #139=     #137                 ?0                  	;0	<<273
277 169  JMPZ/43                   ?0        #139                 ?279                	;0	>>279
278 170  GOTO/253                  ?0        ?282                 ?203                	;0
279 172  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'generateError' 	;1	<<277
280 172  SEND_VAL_EX/116           ?80       206:'NO_CREDENTIALS' ?1                  	;0
281 172  DO_FCALL_BY_NAME/131      ?124      ?0                   ?0                  	;0
282 174  GOTO/253                  ?0        ?473                 ?207                	;0
283 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'register_shutdown_function'	;1	<<0
284 176  SEND_VAL_EX/116           ?80       210:'shutdown'       ?1                  	;0
285 176  DO_FCALL_BY_NAME/131      ?125      ?0                   ?0                  	;0
286 177  INCLUDE_OR_EVAL/73        ?126      211:'init.php'       ?0                  	;8
287 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'set_time_limit'	;1
288 178  SEND_VAL_EX/116           ?80       214:0                ?1                  	;0
289 178  DO_FCALL_BY_NAME/131      ?127      ?0                   ?0                  	;0
290 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'header'        	;1
291 179  SEND_VAL_EX/116           ?80       217:'Access-Control-Allow-Origin: *' ?1                  	;0
292 179  DO_FCALL_BY_NAME/131      ?128      ?0                   ?0                  	;0
293 180  ASSIGN/38                 ?129      16?4                 218:true            	;0
294 181  GOTO/253                  ?0        ?44                  ?219                	;0
295 183  ISSET_ISEMPTY_DIM_OBJ/115 #146=     16?3                 220:'forced_country'	;16777216
296 183  BOOL_NOT/13               #147=     #146                 ?0                  	;0
297 183  ASSIGN/38                 ?132      16?12                #147                	;0
298 184  JMPZ_EX/46                #149=     16?12                ?302                	;0	>>302
299 184  FETCH_DIM_R/81            $150=     16?3                 221:'forced_country'	;0
300 184  IS_NOT_EQUAL/18           #151=     $150                 222:'ALL'           	;0
301 184  BOOL/52                   #149=     #151                 ?0                  	;0
302 184  JMPZ_EX/46                #149=     #149                 ?306                	;0	>>306	<<298
303 184  FETCH_DIM_R/81            $152=     16?3                 223:'forced_country'	;0
304 184  IS_NOT_EQUAL/18           #153=     16?9                 $152                	;0
305 184  BOOL/52                   #149=     #153                 ?0                  	;0
306 184  BOOL_NOT/13               #154=     #149                 ?0                  	;0	<<302
307 184  JMPZ/43                   ?0        #154                 ?309                	;0	>>309
308 185  GOTO/253                  ?0        ?312                 ?224                	;0
309 187  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'generateError' 	;1	<<307
310 187  SEND_VAL_EX/116           ?80       227:'FORCED_COUNTRY_INVALID' ?1                  	;0
311 187  DO_FCALL_BY_NAME/131      ?139      ?0                   ?0                  	;0
312 189  BOOL_NOT/13               #156=     16?12                ?0                  	;0
313 189  JMPZ_EX/46                #156=     #156                 ?322                	;0	>>322
314 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'in_array'      	;2
315 189  SEND_VAL_EX/116           ?80       230:'ALL'            ?1                  	;0
316 189  FETCH_STATIC_PROP_FUNC_ARG/177 $157=     231:'rSettings'      232:'XUI'           	;2
317 189  FETCH_DIM_FUNC_ARG/93     $158=     $157                 234:'allow_countries'	;2
318 189  SEND_VAR_EX/66            ?96       $158                 ?2                  	;0
319 189  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
320 189  BOOL_NOT/13               #160=     $159                 ?0                  	;0
321 189  BOOL/52                   #156=     #160                 ?0                  	;0
322 189  JMPZ_EX/46                #156=     #156                 ?331                	;0	>>331	<<313
323 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'in_array'      	;2
324 189  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
325 189  FETCH_STATIC_PROP_FUNC_ARG/177 $161=     237:'rSettings'      238:'XUI'           	;2
326 189  FETCH_DIM_FUNC_ARG/93     $162=     $161                 240:'allow_countries'	;2
327 189  SEND_VAR_EX/66            ?96       $162                 ?2                  	;0
328 189  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
329 189  BOOL_NOT/13               #164=     $163                 ?0                  	;0
330 189  BOOL/52                   #156=     #164                 ?0                  	;0
331 189  BOOL_NOT/13               #165=     #156                 ?0                  	;0	<<322
332 189  JMPZ/43                   ?0        #165                 ?334                	;0	>>334
333 190  GOTO/253                  ?0        ?82                  ?241                	;0
334 192  GOTO/253                  ?0        ?79                  ?242                	;0	<<332
335 194  FETCH_STATIC_PROP_R/173   $166=     243:'rRequest'       244:'XUI'           	;0
336 194  FETCH_DIM_R/81            $167=     $166                 246:'password'      	;0
337 194  ASSIGN/38                 ?152      16?11                $167                	;0
338 195  FETCH_STATIC_PROP_IS/176  $169=     247:'rRequest'       248:'XUI'           	;0
339 195  ISSET_ISEMPTY_DIM_OBJ/115 #170=     $169                 250:'gzip'          	;16777216
340 195  BOOL_NOT/13               #171=     #170                 ?0                  	;0
341 195  JMPZ_EX/46                #171=     #171                 ?349                	;0	>>349
342 195  INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'intval'        	;1
343 195  FETCH_STATIC_PROP_FUNC_ARG/177 $172=     253:'rRequest'       254:'XUI'           	;1
344 195  FETCH_DIM_FUNC_ARG/93     $173=     $172                 256:'gzip'          	;1
345 195  SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
346 195  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
347 195  IS_EQUAL/17               #175=     $174                 257:1               	;0
348 195  BOOL/52                   #171=     #175                 ?0                  	;0
349 195  ASSIGN/38                 ?160      16?6                 #171                	;0	<<341
350 196  FETCH_STATIC_PROP_IS/176  $177=     258:'rRequest'       259:'XUI'           	;0
351 196  ISSET_ISEMPTY_DIM_OBJ/115 #178=     $177                 261:'username'      	;33554432
352 196  JMPZ_EX/46                #178=     #178                 ?356                	;0	>>356
353 196  FETCH_STATIC_PROP_IS/176  $179=     262:'rRequest'       263:'XUI'           	;0
354 196  ISSET_ISEMPTY_DIM_OBJ/115 #180=     $179                 265:'password'      	;33554432
355 196  BOOL/52                   #178=     #180                 ?0                  	;0
356 196  JMPZ/43                   ?0        #178                 ?358                	;0	>>358	<<352
357 197  GOTO/253                  ?0        ?472                 ?266                	;0
358 199  FETCH_STATIC_PROP_IS/176  $181=     267:'rRequest'       268:'XUI'           	;0	<<356
359 199  ISSET_ISEMPTY_DIM_OBJ/115 #182=     $181                 270:'token'         	;33554432
360 199  JMPZ/43                   ?0        #182                 ?362                	;0	>>362
361 200  GOTO/253                  ?0        ?451                 ?271                	;0
362 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'generateError' 	;1	<<360
363 202  SEND_VAL_EX/116           ?80       274:'NO_CREDENTIALS' ?1                  	;0
364 202  DO_FCALL_BY_NAME/131      ?167      ?0                   ?0                  	;0
365 203  GOTO/253                  ?0        ?450                 ?275                	;0
366 206  EXIT/79                   ?0        ?0                   ?0                  	;0
367 208  GOTO/253                  ?0        ?494                 ?276                	;0
368 211  FETCH_DIM_R/81            $184=     16?3                 277:'admin_enabled' 	;0
369 211  JMPZ/43                   ?0        $184                 ?371                	;0	>>371
370 212  GOTO/253                  ?0        ?374                 ?278                	;0
371 214  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'generateError' 	;1	<<369
372 214  SEND_VAL_EX/116           ?80       281:'BANNED'         ?1                  	;0
373 214  DO_FCALL_BY_NAME/131      ?169      ?0                   ?0                  	;0
374 216  FETCH_DIM_R/81            $186=     16?3                 282:'enabled'       	;0
375 216  JMPZ/43                   ?0        $186                 ?377                	;0	>>377
376 217  GOTO/253                  ?0        ?230                 ?283                	;0
377 219  GOTO/253                  ?0        ?227                 ?284                	;0	<<375
378 221  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'generateError' 	;1
379 221  SEND_VAL_EX/116           ?80       287:'ASN_BLOCKED'    ?1                  	;0
380 221  DO_FCALL_BY_NAME/131      ?171      ?0                   ?0                  	;0
381 224  ASSIGN/38                 ?172      16?0                 288:array (
)       	;0
382 225  FETCH_DIM_R/81            $189=     16?3                 289:'bouquet'       	;0
383 225  FE_RESET_R/77             $190=     $189                 ?400                	;0
384 225  FE_FETCH_R/78             ?0        $190                 16?13               	;400	>>400	<<399
385 226  INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'in_array'      	;2
386 226  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
387 226  INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'array_keys'    	;1
388 226  FETCH_STATIC_PROP_FUNC_ARG/177 $191=     294:'rBouquets'      295:'XUI'           	;1
389 226  SEND_VAR_EX/66            ?80       $191                 ?1                  	;0
390 226  DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
391 226  SEND_VAR_NO_REF_EX/50     ?96       $192                 ?2                  	;0
392 226  DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
393 226  BOOL_NOT/13               #194=     $193                 ?0                  	;0
394 226  JMPZ/43                   ?0        #194                 ?397                	;0	>>397
395 227  NOP/0                     ?0        ?0                   ?0                  	;1
396 227  GOTO/253                  ?0        ?399                 ?297                	;0
397 229  ASSIGN_DIM/147            ?179      16?0                 ?4397406            	;0	<<394
398 229  OP_DATA/137               ?0        16?13                ?0                  	;0
399 231  JMP/42                    ?0        ?384                 ?0                  	;0	>>384
400 231  FE_FREE/127               ?0        $190                 ?0                  	;0	<<383
401 233  GOTO/253                  ?0        ?1                   ?298                	;0
402 235  ASSIGN/38                 ?180      16?14                299:false           	;0
403 236  INIT_STATIC_METHOD_CALL/113 ?0        300:'XUI'            302:'aD72b4259cA295b2'	;0
404 236  DO_FCALL/60               $197=     ?0                   ?0                  	;0
405 236  ASSIGN/38                 ?182      16?8                 $197                	;0
406 237  INIT_STATIC_METHOD_CALL/113 ?0        304:'XUI'            306:'aEd9009B5dC15cae'	;1
407 237  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
408 237  DO_FCALL/60               $199=     ?0                   ?0                  	;0
409 237  FETCH_DIM_R/81            $200=     $199                 308:'country'       	;0
410 237  FETCH_DIM_R/81            $201=     $200                 309:'iso_code'      	;0
411 237  ASSIGN/38                 ?186      16?9                 $201                	;0
412 238  FETCH_IS/89               $203=     310:'_SERVER'        ?0                  	;0
413 238  ISSET_ISEMPTY_DIM_OBJ/115 #204=     $203                 311:'HTTP_USER_AGENT'	;16777216
414 238  JMPZ/43                   ?0        #204                 ?417                	;0	>>417
415 238  QM_ASSIGN/22              #205=     312:''               ?0                  	;0
416 238  JMP/42                    ?0        ?426                 ?0                  	;0	>>426
417 238  INIT_FCALL_BY_NAME/59     ?0        ?0                   313:'htmlentities'  	;1	<<414
418 238  INIT_FCALL_BY_NAME/59     ?0        ?0                   315:'trim'          	;1
419 238  FETCH_FUNC_ARG/92         $206=     317:'_SERVER'        ?0                  	;1
420 238  FETCH_DIM_FUNC_ARG/93     $207=     $206                 318:'HTTP_USER_AGENT'	;1
421 238  SEND_VAR_EX/66            ?80       $207                 ?1                  	;0
422 238  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
423 238  SEND_VAR_NO_REF_EX/50     ?80       $208                 ?1                  	;0
424 238  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
425 238  QM_ASSIGN/22              #205=     $209                 ?0                  	;0
426 238  ASSIGN/38                 ?194      16?5                 #205                	;0	<<416
427 239  FETCH_STATIC_PROP_R/173   $211=     319:'rRequest'       320:'XUI'           	;0
428 239  FETCH_DIM_R/81            $212=     $211                 322:'username'      	;0
429 239  ASSIGN/38                 ?197      16?10                $212                	;0
430 240  GOTO/253                  ?0        ?335                 ?323                	;0
431 242  INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'http_response_code'	;1
432 242  SEND_VAL_EX/116           ?80       326:429              ?1                  	;0
433 242  DO_FCALL_BY_NAME/131      ?198      ?0                   ?0                  	;0
434 243  EXIT/79                   ?0        ?0                   ?0                  	;0
435 244  GOTO/253                  ?0        ?108                 ?327                	;0
436 246  ASSIGN/38                 ?199      16?14                328:true            	;0
437 247  GOTO/253                  ?0        ?438                 ?329                	;0
438 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   330:'header'        	;1
439 249  CONCAT/8                  #216=     332:'Content-disposition: attachment; filename="' 16?7                	;0
440 249  CONCAT/8                  #217=     #216                 333:'"'             	;0
441 249  SEND_VAL_EX/116           ?80       #217                 ?1                  	;0
442 249  DO_FCALL_BY_NAME/131      ?202      ?0                   ?0                  	;0
443 250  JMPZ/43                   ?0        16?6                 ?445                	;0	>>445
444 251  GOTO/253                  ?0        ?449                 ?334                	;0
445 253  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'header'        	;1	<<443
446 253  SEND_VAL_EX/116           ?80       337:'Content-Type: application/xml; charset=utf-8' ?1                  	;0
447 253  DO_FCALL_BY_NAME/131      ?203      ?0                   ?0                  	;0
448 254  GOTO/253                  ?0        ?105                 ?338                	;0
449 256  GOTO/253                  ?0        ?99                  ?339                	;0
450 258  GOTO/253                  ?0        ?471                 ?340                	;0
451 260  FETCH_STATIC_PROP_R/173   $220=     341:'rRequest'       342:'XUI'           	;0
452 260  FETCH_DIM_R/81            $221=     $220                 344:'token'         	;0
453 260  ASSIGN/38                 ?206      16?15                $221                	;0
454 261  ISSET_ISEMPTY_CV/197      #223=     16?15                ?0                  	;16777216
455 261  BOOL_NOT/13               #224=     #223                 ?0                  	;0
456 261  JMPZ/43                   ?0        #224                 ?458                	;0	>>458
457 262  GOTO/253                  ?0        ?462                 ?345                	;0
458 264  INIT_FCALL_BY_NAME/59     ?0        ?0                   346:'generateError' 	;1	<<456
459 264  SEND_VAL_EX/116           ?80       348:'NO_CREDENTIALS' ?1                  	;0
460 264  DO_FCALL_BY_NAME/131      ?209      ?0                   ?0                  	;0
461 265  GOTO/253                  ?0        ?462                 ?349                	;0
462 268  INIT_STATIC_METHOD_CALL/113 ?0        350:'XUI'            352:'CC988751eeBBF271'	;6
463 268  SEND_VAL_EX/116           ?80       354:NULL             ?1                  	;0
464 268  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
465 268  SEND_VAL_EX/116           ?112      355:NULL             ?3                  	;0
466 268  SEND_VAL_EX/116           ?128      356:false            ?4                  	;0
467 268  SEND_VAL_EX/116           ?144      357:false            ?5                  	;0
468 268  SEND_VAR_EX/66            ?160      16?8                 ?6                  	;0
469 268  DO_FCALL/60               $226=     ?0                   ?0                  	;0
470 268  ASSIGN/38                 ?211      16?3                 $226                	;0
471 270  GOTO/253                  ?0        ?482                 ?358                	;0
472 272  GOTO/253                  ?0        ?266                 ?359                	;0
473 274  INIT_STATIC_METHOD_CALL/113 ?0        360:'XUI'            362:'cc988751eEBbF271'	;6
474 274  SEND_VAL_EX/116           ?80       364:NULL             ?1                  	;0
475 274  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
476 274  SEND_VAR_EX/66            ?112      16?11                ?3                  	;0
477 274  SEND_VAL_EX/116           ?128      365:false            ?4                  	;0
478 274  SEND_VAL_EX/116           ?144      366:false            ?5                  	;0
479 274  SEND_VAR_EX/66            ?160      16?8                 ?6                  	;0
480 274  DO_FCALL/60               $228=     ?0                   ?0                  	;0
481 274  ASSIGN/38                 ?213      16?3                 $228                	;0
482 276  INIT_FCALL_BY_NAME/59     ?0        ?0                   367:'ini_set'       	;2
483 276  SEND_VAL_EX/116           ?80       369:'memory_limit'   ?1                  	;0
484 276  SEND_VAL_EX/116           ?96       370:-1               ?2                  	;0
485 276  DO_FCALL_BY_NAME/131      ?214      ?0                   ?0                  	;0
486 277  JMPZ/43                   ?0        16?3                 ?488                	;0	>>488
487 278  GOTO/253                  ?0        ?113                 ?371                	;0
488 280  INIT_STATIC_METHOD_CALL/113 ?0        372:'XUI'            374:'a1FeF6439c28608E'	;3	<<486
489 280  SEND_VAL_EX/116           ?80       376:NULL             ?1                  	;0
490 280  SEND_VAL_EX/116           ?96       377:NULL             ?2                  	;0
491 280  SEND_VAR_EX/66            ?112      16?10                ?3                  	;0
492 280  DO_FCALL/60               ?215      ?0                   ?0                  	;0
493 281  GOTO/253                  ?0        ?109                 ?378                	;0
494 283  NOP/0                     ?0        ?0                   ?0                  	;0
495 302  NOP/0                     ?0        379:1                ?0                  	;4294967295
*/

?>