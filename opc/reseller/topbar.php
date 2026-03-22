<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'count'           	;1	<<0
2   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'get_included_files'	;0
3   5    DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
4   5    SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
5   5    DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
6   5    IS_EQUAL/17               #12=      $11                  5:1                 	;0
7   5    BOOL_NOT/13               #13=      #12                  ?0                  	;0
8   5    JMPZ/43                   ?0        #13                  ?10                 	;0	>>10
9   6    GOTO/253                  ?0        ?11                  ?6                  	;0
10  8    EXIT/79                   ?0        ?0                   ?0                  	;0	<<8
11  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'D60f670923AdBf13'	;0
12  10   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
13  10   ASSIGN/38                 ?5        16?0                 $14                 	;0
14  11   FETCH_STATIC_PROP_IS/176  $16=      9:'rRequest'         10:'XUI'            	;0
15  11   ISSET_ISEMPTY_DIM_OBJ/115 #17=      $16                  12:'id'             	;33554432
16  11   JMPZ/43                   ?0        #17                  ?24                 	;0	>>24
17  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'intval'         	;1
18  11   FETCH_STATIC_PROP_FUNC_ARG/177 $18=      15:'rRequest'        16:'XUI'            	;1
19  11   FETCH_DIM_FUNC_ARG/93     $19=      $18                  18:'id'             	;1
20  11   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
21  11   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
22  11   QM_ASSIGN/22              #21=      $20                  ?0                  	;0
23  11   JMP/42                    ?0        ?25                  ?0                  	;0	>>25
24  11   QM_ASSIGN/22              #21=      19:NULL              ?0                  	;0	<<16
25  11   ASSIGN/38                 ?12       16?1                 #21                 	;0	<<23
26  12   GOTO/253                  ?0        ?27                  ?20                 	;0
27  14   INIT_ARRAY/71             #23=      21:array (
  'Add Line' => 
  array (
    0 => 'line',
    1 => 'create_line',
  ),
  'Live Connections' => 
  array (
    0 => 'live_connections',
    1 => 'reseller_client_connection_logs',
  ),
  'Activity Logs' => 
  array (
    0 => 'line_activity',
    1 => 'reseller_client_connection_logs',
  ),
) 22:'lines'          	;54
28  14   ADD_ARRAY_ELEMENT/72      #23=      23:array (
  'Activity Logs' => 
  array (
    0 => 'line_activity',
    1 => 'reseller_client_connection_logs',
  ),
) 24:'live_connections'	;0
29  14   ADD_ARRAY_ELEMENT/72      #23=      25:array (
  'Live Connections' => 
  array (
    0 => 'live_connections',
    1 => 'reseller_client_connection_logs',
  ),
) 26:'line_activity'  	;0
30  14   ADD_ARRAY_ELEMENT/72      #23=      27:array (
  'Add Device' => 
  array (
    0 => 'mag',
    1 => 'create_mag',
  ),
  'Live Connections' => 
  array (
    0 => 'live_connections',
    1 => 'reseller_client_connection_logs',
  ),
  'Activity Logs' => 
  array (
    0 => 'line_activity',
    1 => 'reseller_client_connection_logs',
  ),
) 28:'mags'           	;0
31  14   ADD_ARRAY_ELEMENT/72      #23=      29:array (
  'Add Device' => 
  array (
    0 => 'enigma',
    1 => 'create_enigma',
  ),
  'Live Connections' => 
  array (
    0 => 'live_connections',
    1 => 'reseller_client_connection_logs',
  ),
  'Activity Logs' => 
  array (
    0 => 'line_activity',
    1 => 'reseller_client_connection_logs',
  ),
) 30:'enigmas'        	;0
32  14   ADD_ARRAY_ELEMENT/72      #23=      31:array (
  'Add User' => 
  array (
    0 => 'user',
    1 => 'create_sub_resellers',
  ),
  'Client Logs' => 
  array (
    0 => 'client_logs',
    1 => 'reseller_client_connection_logs',
  ),
  'Reseller Logs' => 
  array (
    0 => 'user_logs',
    1 => NULL,
  ),
) 32:'users'          	;0
33  14   ADD_ARRAY_ELEMENT/72      #23=      33:array (
  'Manage Lines' => 
  array (
    0 => 'lines',
    1 => 'create_line',
  ),
) 34:'line'           	;0
34  14   ADD_ARRAY_ELEMENT/72      #23=      35:array (
  'Manage Users' => 
  array (
    0 => 'users',
    1 => 'create_sub_resellers',
  ),
) 36:'user'           	;0
35  14   ADD_ARRAY_ELEMENT/72      #23=      37:array (
  'MAG Devices' => 
  array (
    0 => 'mags',
    1 => 'create_mag',
  ),
) 38:'mag'            	;0
36  14   ADD_ARRAY_ELEMENT/72      #23=      39:array (
  'Enigma Devices' => 
  array (
    0 => 'enigmas',
    1 => 'create_enigma',
  ),
) 40:'enigma'         	;0
37  14   CONCAT/8                  #24=      41:'ticket_view?id=' 16?1                	;0
38  14   INIT_ARRAY/71             #25=      #24                  ?0                  	;8
39  14   ADD_ARRAY_ELEMENT/72      #25=      42:NULL              ?0                  	;0
40  14   INIT_ARRAY/71             #26=      #25                  43:'View Ticket'    	;10
41  14   ADD_ARRAY_ELEMENT/72      #26=      44:array (
  0 => 'tickets',
  1 => NULL,
) 45:'View Tickets'   	;0
42  14   ADD_ARRAY_ELEMENT/72      #23=      #26                  46:'ticket'         	;0
43  14   CONCAT/8                  #27=      47:'ticket?id='      16?1                	;0
44  14   INIT_ARRAY/71             #28=      #27                  ?0                  	;8
45  14   ADD_ARRAY_ELEMENT/72      #28=      48:NULL              ?0                  	;0
46  14   INIT_ARRAY/71             #29=      #28                  49:'Add Response'   	;10
47  14   ADD_ARRAY_ELEMENT/72      #29=      50:array (
  0 => 'tickets',
  1 => NULL,
) 51:'View Tickets'   	;0
48  14   ADD_ARRAY_ELEMENT/72      #23=      #29                  52:'ticket_view'    	;0
49  14   ADD_ARRAY_ELEMENT/72      #23=      53:array (
  'Create Ticket' => 
  array (
    0 => 'ticket',
    1 => NULL,
  ),
) 54:'tickets'        	;0
50  14   ASSIGN/38                 ?20       16?2                 #23                 	;0
51  15   SWITCH_STRING/188         ?0        16?0                 55:array (
  'ticket' => 57,
  'ticket_view' => 68,
)	;81
52  16   CASE/48                   #31=      16?0                 56:'ticket'         	;0	>>54
53  16   JMPNZ/44                  ?0        #31                  ?57                 	;0	>>57
54  23   CASE/48                   #31=      16?0                 57:'ticket_view'    	;0	>>56	<<52
55  23   JMPNZ/44                  ?0        #31                  ?68                 	;0	>>68
56  23   JMP/42                    ?0        ?81                  ?0                  	;0	>>81	<<54
57  17   ISSET_ISEMPTY_CV/197      #32=      16?3                 ?0                  	;33554432	<<53
58  17   JMPZ/43                   ?0        #32                  ?60                 	;0	>>60
59  18   GOTO/253                  ?0        ?67                  ?58                 	;0
60  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'array_keys'     	;1	<<58
61  20   FETCH_DIM_FUNC_ARG/93     $34=      16?2                 16?0                	;1
62  20   SEND_VAR_EX/66            ?80       $34                  ?1                  	;0
63  20   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
64  20   FETCH_DIM_R/81            $36=      $35                  61:0                	;0
65  20   FETCH_DIM_UNSET/96        $33=      16?2                 16?0                	;0
66  20   UNSET_DIM/75              ?0        $33                  $36                 	;0
67  22   GOTO/253                  ?0        ?81                  ?62                 	;0
68  24   FETCH_DIM_R/81            $37=      16?4                 63:'status'         	;0	<<55
69  24   IS_EQUAL/17               #38=      $37                  64:0                	;0
70  24   BOOL_NOT/13               #39=      #38                  ?0                  	;0
71  24   JMPZ/43                   ?0        #39                  ?73                 	;0	>>73
72  25   GOTO/253                  ?0        ?80                  ?65                 	;0
73  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'array_keys'     	;1	<<71
74  27   FETCH_DIM_FUNC_ARG/93     $41=      16?2                 16?0                	;1
75  27   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
76  27   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
77  27   FETCH_DIM_R/81            $43=      $42                  68:0                	;0
78  27   FETCH_DIM_UNSET/96        $40=      16?2                 16?0                	;0
79  27   UNSET_DIM/75              ?0        $40                  $43                 	;0
80  29   GOTO/253                  ?0        ?81                  ?69                 	;0
81  33   ASSIGN/38                 ?34       16?5                 70:array (
)        	;0	<<56
82  34   GOTO/253                  ?0        ?84                  ?71                 	;0
83  37   GOTO/253                  ?0        ?506                 ?72                 	;0
84  39   ISSET_ISEMPTY_DIM_OBJ/115 #45=      16?2                 16?0                	;33554432
85  39   BOOL_NOT/13               #46=      #45                  ?0                  	;0
86  39   JMPZ/43                   ?0        #46                  ?88                 	;0	>>88
87  40   GOTO/253                  ?0        ?124                 ?73                 	;0
88  42   FETCH_DIM_R/81            $47=      16?2                 16?0                	;0	<<86
89  42   FE_RESET_R/77             $48=      $47                  ?123                	;0
90  42   FE_FETCH_R/78             #49=      $48                  16?6                	;123	>>123	<<122
91  42   ASSIGN/38                 ?40       16?7                 #49                 	;0
92  43   JMPZ_EX/46                #51=      16?7                 ?102                	;0	>>102
93  43   FETCH_DIM_R/81            $52=      16?6                 74:1                	;0
94  43   BOOL_NOT/13               #53=      $52                  ?0                  	;0
95  43   JMPNZ_EX/47               #53=      #53                  ?101                	;0	>>101
96  43   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'A7dC2607457949eC'	;1
97  43   FETCH_DIM_FUNC_ARG/93     $54=      16?6                 77:1                	;1
98  43   SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
99  43   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
100 43   BOOL/52                   #53=      $55                  ?0                  	;0
101 43   BOOL/52                   #51=      #53                  ?0                  	;0	<<95
102 43   BOOL_NOT/13               #56=      #51                  ?0                  	;0	<<92
103 43   JMPZ/43                   ?0        #56                  ?106                	;0	>>106
104 44   NOP/0                     ?0        ?0                   ?0                  	;1
105 44   GOTO/253                  ?0        ?122                 ?78                 	;0
106 46   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'count'          	;1	<<103
107 46   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
108 46   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
109 46   IS_EQUAL/17               #58=      $57                  81:3                	;0
110 46   JMPZ/43                   ?0        #58                  ?113                	;0	>>113
111 47   NOP/0                     ?0        ?0                   ?0                  	;1
112 47   GOTO/253                  ?0        ?118                 ?82                 	;0
113 49   FETCH_DIM_R/81            $60=      16?6                 83:0                	;0	<<110
114 49   ASSIGN_DIM/147            ?49       16?5                 16?7                	;0
115 49   OP_DATA/137               ?0        $60                  ?0                  	;0
116 50   NOP/0                     ?0        ?0                   ?0                  	;1
117 50   GOTO/253                  ?0        ?122                 ?84                 	;0
118 52   FETCH_DIM_R/81            $62=      16?6                 85:2                	;0
119 52   CONCAT/8                  #63=      86:'javascript: void(0);" ' $62                 	;0
120 52   ASSIGN_DIM/147            ?51       16?5                 16?7                	;0
121 52   OP_DATA/137               ?0        #63                  ?0                  	;0
122 55   JMP/42                    ?0        ?90                  ?0                  	;0	>>90
123 55   FE_FREE/127               ?0        $48                  ?0                  	;0	<<89
124 59   SWITCH_STRING/188         ?0        16?0                 87:array (
  'streams' => 152,
  'created_channels' => 152,
  'movies' => 152,
  'users' => 152,
  'mags' => 152,
  'client_logs' => 152,
  'line_activity' => 152,
  'live_connections' => 152,
  'lines' => 152,
  'radios' => 152,
  'enigmas' => 152,
  'episodes' => 152,
  'user_logs' => 329,
)	;331
125 60   CASE/48                   #64=      16?0                 88:'streams'        	;0	>>127
126 60   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
127 61   CASE/48                   #64=      16?0                 89:'created_channels'	;0	>>129	<<125
128 61   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
129 62   CASE/48                   #64=      16?0                 90:'movies'         	;0	>>131	<<127
130 62   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
131 63   CASE/48                   #64=      16?0                 91:'users'          	;0	>>133	<<129
132 63   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
133 64   CASE/48                   #64=      16?0                 92:'mags'           	;0	>>135	<<131
134 64   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
135 65   CASE/48                   #64=      16?0                 93:'client_logs'    	;0	>>137	<<133
136 65   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
137 66   CASE/48                   #64=      16?0                 94:'line_activity'  	;0	>>139	<<135
138 66   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
139 67   CASE/48                   #64=      16?0                 95:'live_connections'	;0	>>141	<<137
140 67   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
141 68   CASE/48                   #64=      16?0                 96:'lines'          	;0	>>143	<<139
142 68   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
143 69   CASE/48                   #64=      16?0                 97:'radios'         	;0	>>145	<<141
144 69   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
145 70   CASE/48                   #64=      16?0                 98:'enigmas'        	;0	>>147	<<143
146 70   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
147 71   CASE/48                   #64=      16?0                 99:'episodes'       	;0	>>149	<<145
148 71   JMPNZ/44                  ?0        #64                  ?152                	;0	>>152
149 137  CASE/48                   #64=      16?0                 100:'user_logs'     	;0	>>151	<<147
150 137  JMPNZ/44                  ?0        #64                  ?329                	;0	>>329
151 137  JMP/42                    ?0        ?331                 ?0                  	;0	>>331	<<149
152 72   GOTO/253                  ?0        ?259                 ?101                	;0	<<126,128,130,132,134,136,138,140,142,144,146,148
153 74   GOTO/253                  ?0        ?172                 ?102                	;0
154 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'array_keys'    	;1
155 76   FETCH_DIM_FUNC_ARG/93     $66=      16?2                 16?0                	;1
156 76   SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
157 76   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
158 76   FETCH_DIM_R/81            $68=      $67                  105:0               	;0
159 76   FETCH_DIM_R/81            $65=      16?2                 16?0                	;0
160 76   FETCH_DIM_R/81            $69=      $65                  $68                 	;0
161 76   FETCH_DIM_R/81            $70=      $69                  106:2               	;0
162 76   CONCAT/8                  #71=      107:'<button type="button" ' $70                 	;0
163 76   CONCAT/8                  #72=      #71                  108:' class="btn btn-sm btn-info waves-effect waves-light">'	;0
164 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'array_keys'    	;1
165 76   FETCH_DIM_FUNC_ARG/93     $73=      16?2                 16?0                	;1
166 76   SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
167 76   DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
168 76   FETCH_DIM_R/81            $75=      $74                  111:0               	;0
169 76   CONCAT/8                  #76=      #72                  $75                 	;0
170 76   CONCAT/8                  #77=      #76                  112:'</button>'     	;0
171 76   ECHO/40                   ?0        #77                  ?0                  	;0
172 78   GOTO/253                  ?0        ?257                 ?113                	;0
173 79   GOTO/253                  ?0        ?239                 ?114                	;0
174 81   ECHO/40                   ?0        115:'<button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed-sm" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                <div class="dropdown-menu">' ?0                  	;0
175 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'array_slice'   	;3
176 82   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
177 82   JMPZ/43                   ?0        16?8                 ?180                	;0	>>180
178 82   QM_ASSIGN/22              #78=      118:0                ?0                  	;0
179 82   JMP/42                    ?0        ?181                 ?0                  	;0	>>181
180 82   QM_ASSIGN/22              #78=      119:1                ?0                  	;0	<<177
181 82   SEND_VAL_EX/116           ?96       #78                  ?2                  	;0	<<179
182 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'count'         	;1
183 82   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
184 82   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
185 82   SEND_VAR_NO_REF_EX/50     ?112      $79                  ?3                  	;0
186 82   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
187 82   FE_RESET_R/77             $81=      $80                  ?208                	;0
188 82   FE_FETCH_R/78             #82=      $81                  16?9                	;208	>>208	<<207
189 82   ASSIGN/38                 ?73       16?7                 #82                 	;0
190 83   BOOL_NOT/13               #84=      16?7                 ?0                  	;0
191 83   JMPZ/43                   ?0        #84                  ?194                	;0	>>194
192 84   NOP/0                     ?0        ?0                   ?0                  	;1
193 84   GOTO/253                  ?0        ?207                 ?122                	;0
194 86   JMPZ/43                   ?0        16?9                 ?197                	;0	>>197	<<191
195 87   NOP/0                     ?0        ?0                   ?0                  	;1
196 87   GOTO/253                  ?0        ?202                 ?123                	;0
197 89   CONCAT/8                  #85=      124:'<a class="dropdown-item" href="javascript: void(0);" onClick="showModal();">' 16?7                	;0	<<194
198 89   CONCAT/8                  #86=      #85                  125:'</a>'          	;0
199 89   ECHO/40                   ?0        #86                  ?0                  	;0
200 90   NOP/0                     ?0        ?0                   ?0                  	;1
201 90   GOTO/253                  ?0        ?207                 ?126                	;0
202 92   CONCAT/8                  #87=      127:'<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' 16?9                	;0
203 92   CONCAT/8                  #88=      #87                  128:'\');">'        	;0
204 92   CONCAT/8                  #89=      #88                  16?7                	;0
205 92   CONCAT/8                  #90=      #89                  129:'</a>'          	;0
206 92   ECHO/40                   ?0        #90                  ?0                  	;0
207 95   JMP/42                    ?0        ?188                 ?0                  	;0	>>188
208 95   FE_FREE/127               ?0        $81                  ?0                  	;0	<<187
209 98   ECHO/40                   ?0        130:'</div>'         ?0                  	;0
210 100  GOTO/253                  ?0        ?211                 ?131                	;0
211 102  ECHO/40                   ?0        132:'</div>'         ?0                  	;0
212 103  GOTO/253                  ?0        ?506                 ?133                	;0
213 104  GOTO/253                  ?0        ?329                 ?134                	;0
214 106  BOOL_NOT/13               #91=      16?8                 ?0                  	;0
215 106  JMPZ/43                   ?0        #91                  ?217                	;0	>>217
216 107  GOTO/253                  ?0        ?218                 ?135                	;0
217 109  ECHO/40                   ?0        136:'<a class="btn btn-success waves-effect waves-light btn-sm btn-fixed-sm" data-toggle="collapse" href="#collapse_filters" role="button" aria-expanded="false">
                    <i class="mdi mdi-filter"></i>
                </a>' ?0                  	;0	<<215
218 111  ECHO/40                   ?0        137:'<button onClick="clearFilters();" type="button" class="btn btn-warning waves-effect waves-light btn-sm btn-fixed-sm" id="clearFilters">
                <i class="mdi mdi-filter-remove"></i>
            </button>
            <button onClick="refreshTable();" type="button" class="btn btn-pink waves-effect waves-light btn-sm btn-fixed-sm">
                <i class="mdi mdi-refresh"></i>
            </button>' ?0                  	;0
219 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'count'         	;1
220 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'array_slice'   	;3
221 112  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
222 112  JMPZ/43                   ?0        16?8                 ?225                	;0	>>225
223 112  QM_ASSIGN/22              #92=      142:0                ?0                  	;0
224 112  JMP/42                    ?0        ?226                 ?0                  	;0	>>226
225 112  QM_ASSIGN/22              #92=      143:1                ?0                  	;0	<<222
226 112  SEND_VAL_EX/116           ?96       #92                  ?2                  	;0	<<224
227 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'count'         	;1
228 112  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
229 112  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
230 112  SEND_VAR_NO_REF_EX/50     ?112      $93                  ?3                  	;0
231 112  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
232 112  SEND_VAR_NO_REF_EX/50     ?80       $94                  ?1                  	;0
233 112  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
234 112  IS_SMALLER/19             #96=      146:0                $95                 	;0
235 112  BOOL_NOT/13               #97=      #96                  ?0                  	;0
236 112  JMPZ/43                   ?0        #97                  ?238                	;0	>>238
237 113  GOTO/253                  ?0        ?210                 ?147                	;0
238 115  GOTO/253                  ?0        ?174                 ?148                	;0	<<236
239 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'array_keys'    	;1
240 118  FETCH_DIM_FUNC_ARG/93     $99=      16?2                 16?0                	;1
241 118  SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
242 118  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
243 118  FETCH_DIM_R/81            $101=     $100                 151:0               	;0
244 118  FETCH_DIM_R/81            $98=      16?2                 16?0                	;0
245 118  FETCH_DIM_R/81            $102=     $98                  $101                	;0
246 118  FETCH_DIM_R/81            $103=     $102                 152:0               	;0
247 118  CONCAT/8                  #104=     153:'<button type="button" onClick="navigate(\'' $103                	;0
248 118  CONCAT/8                  #105=     #104                 154:'\');" class="btn btn-sm btn-info waves-effect waves-light">'	;0
249 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'array_keys'    	;1
250 118  FETCH_DIM_FUNC_ARG/93     $106=     16?2                 16?0                	;1
251 118  SEND_VAR_EX/66            ?80       $106                 ?1                  	;0
252 118  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
253 118  FETCH_DIM_R/81            $108=     $107                 157:0               	;0
254 118  CONCAT/8                  #109=     #105                 $108                	;0
255 118  CONCAT/8                  #110=     #109                 158:'</button>'     	;0
256 118  ECHO/40                   ?0        #110                 ?0                  	;0
257 120  ECHO/40                   ?0        159:'<span class="gap"></span>' ?0                  	;0
258 122  GOTO/253                  ?0        ?214                 ?160                	;0
259 124  ECHO/40                   ?0        161:'<div class="btn-group">' ?0                  	;0
260 125  BOOL_NOT/13               #111=     16?8                 ?0                  	;0
261 125  JMPZ_EX/46                #111=     #111                 ?285                	;0	>>285
262 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'array_keys'    	;1
263 125  FETCH_DIM_FUNC_ARG/93     $113=     16?2                 16?0                	;1
264 125  SEND_VAR_EX/66            ?80       $113                 ?1                  	;0
265 125  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
266 125  FETCH_DIM_R/81            $115=     $114                 164:0               	;0
267 125  FETCH_DIM_R/81            $112=     16?2                 16?0                	;0
268 125  FETCH_DIM_R/81            $116=     $112                 $115                	;0
269 125  FETCH_DIM_R/81            $117=     $116                 165:1               	;0
270 125  BOOL_NOT/13               #118=     $117                 ?0                  	;0
271 125  JMPNZ_EX/47               #118=     #118                 ?284                	;0	>>284
272 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'A7DC2607457949ec'	;1
273 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'array_keys'    	;1
274 125  FETCH_DIM_FUNC_ARG/93     $120=     16?2                 16?0                	;1
275 125  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
276 125  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
277 125  FETCH_DIM_R/81            $122=     $121                 170:0               	;0
278 125  FETCH_DIM_FUNC_ARG/93     $119=     16?2                 16?0                	;1
279 125  FETCH_DIM_FUNC_ARG/93     $123=     $119                 $122                	;1
280 125  FETCH_DIM_FUNC_ARG/93     $124=     $123                 171:1               	;1
281 125  SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
282 125  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
283 125  BOOL/52                   #118=     $125                 ?0                  	;0
284 125  BOOL/52                   #111=     #118                 ?0                  	;0	<<271
285 125  JMPZ_EX/46                #111=     #111                 ?297                	;0	>>297	<<261
286 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'strlen'        	;1
287 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'array_keys'    	;1
288 125  FETCH_DIM_FUNC_ARG/93     $126=     16?2                 16?0                	;1
289 125  SEND_VAR_EX/66            ?80       $126                 ?1                  	;0
290 125  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
291 125  SEPARATE/156              $127=     $127                 ?0                  	;0
292 125  FETCH_DIM_FUNC_ARG/93     $128=     $127                 176:0               	;1
293 125  SEND_VAR_EX/66            ?80       $128                 ?1                  	;0
294 125  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
295 125  IS_SMALLER/19             #130=     177:0                $129                	;0
296 125  BOOL/52                   #111=     #130                 ?0                  	;0
297 125  BOOL_NOT/13               #131=     #111                 ?0                  	;0	<<285
298 125  JMPZ/43                   ?0        #131                 ?300                	;0	>>300
299 126  GOTO/253                  ?0        ?258                 ?178                	;0
300 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'array_keys'    	;1	<<298
301 128  FETCH_DIM_FUNC_ARG/93     $133=     16?2                 16?0                	;1
302 128  SEND_VAR_EX/66            ?80       $133                 ?1                  	;0
303 128  DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
304 128  FETCH_DIM_R/81            $135=     $134                 181:0               	;0
305 128  FETCH_DIM_R/81            $132=     16?2                 16?0                	;0
306 128  FETCH_DIM_R/81            $136=     $132                 $135                	;0
307 128  FETCH_DIM_R/81            $137=     $136                 182:0               	;0
308 128  JMPZ/43                   ?0        $137                 ?310                	;0	>>310
309 129  GOTO/253                  ?0        ?239                 ?183                	;0
310 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'array_keys'    	;1	<<308
311 131  FETCH_DIM_FUNC_ARG/93     $139=     16?2                 16?0                	;1
312 131  SEND_VAR_EX/66            ?80       $139                 ?1                  	;0
313 131  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
314 131  FETCH_DIM_R/81            $141=     $140                 186:0               	;0
315 131  FETCH_DIM_IS/90           $138=     16?2                 16?0                	;0
316 131  FETCH_DIM_IS/90           $142=     $138                 $141                	;0
317 131  ISSET_ISEMPTY_DIM_OBJ/115 #143=     $142                 187:2               	;33554432
318 131  JMPZ/43                   ?0        #143                 ?320                	;0	>>320
319 132  GOTO/253                  ?0        ?154                 ?188                	;0
320 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'array_keys'    	;1	<<318
321 134  FETCH_DIM_FUNC_ARG/93     $144=     16?2                 16?0                	;1
322 134  SEND_VAR_EX/66            ?80       $144                 ?1                  	;0
323 134  DO_FCALL_BY_NAME/131      $145=     ?0                   ?0                  	;0
324 134  FETCH_DIM_R/81            $146=     $145                 191:0               	;0
325 134  CONCAT/8                  #147=     192:'<button type="button" onClick="showModal();" class="btn btn-sm btn-info waves-effect waves-light">' $146                	;0
326 134  CONCAT/8                  #148=     #147                 193:'</button>'     	;0
327 134  ECHO/40                   ?0        #148                 ?0                  	;0
328 135  GOTO/253                  ?0        ?153                 ?194                	;0
329 138  ECHO/40                   ?0        195:'<div class="btn-group">
            <button onClick="refreshTable();" type="button" class="btn btn-pink waves-effect waves-light btn-sm btn-fixed-sm">
                <i class="mdi mdi-refresh"></i>
            </button>
        </div>' ?0                  	;0	<<150
330 139  GOTO/253                  ?0        ?506                 ?196                	;0
331 141  GOTO/253                  ?0        ?332                 ?197                	;0	<<151
332 143  ECHO/40                   ?0        198:'<div class="btn-group">' ?0                  	;0
333 144  BOOL_NOT/13               #149=     16?8                 ?0                  	;0
334 144  JMPZ_EX/46                #149=     #149                 ?358                	;0	>>358
335 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'array_keys'    	;1
336 144  FETCH_DIM_FUNC_ARG/93     $151=     16?2                 16?0                	;1
337 144  SEND_VAR_EX/66            ?80       $151                 ?1                  	;0
338 144  DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
339 144  FETCH_DIM_R/81            $153=     $152                 201:0               	;0
340 144  FETCH_DIM_R/81            $150=     16?2                 16?0                	;0
341 144  FETCH_DIM_R/81            $154=     $150                 $153                	;0
342 144  FETCH_DIM_R/81            $155=     $154                 202:1               	;0
343 144  BOOL_NOT/13               #156=     $155                 ?0                  	;0
344 144  JMPNZ_EX/47               #156=     #156                 ?357                	;0	>>357
345 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'a7DC2607457949EC'	;1
346 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'array_keys'    	;1
347 144  FETCH_DIM_FUNC_ARG/93     $158=     16?2                 16?0                	;1
348 144  SEND_VAR_EX/66            ?80       $158                 ?1                  	;0
349 144  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
350 144  FETCH_DIM_R/81            $160=     $159                 207:0               	;0
351 144  FETCH_DIM_FUNC_ARG/93     $157=     16?2                 16?0                	;1
352 144  FETCH_DIM_FUNC_ARG/93     $161=     $157                 $160                	;1
353 144  FETCH_DIM_FUNC_ARG/93     $162=     $161                 208:1               	;1
354 144  SEND_VAR_EX/66            ?80       $162                 ?1                  	;0
355 144  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
356 144  BOOL/52                   #156=     $163                 ?0                  	;0
357 144  BOOL/52                   #149=     #156                 ?0                  	;0	<<344
358 144  JMPZ_EX/46                #149=     #149                 ?370                	;0	>>370	<<334
359 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'strlen'        	;1
360 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'array_keys'    	;1
361 144  FETCH_DIM_FUNC_ARG/93     $164=     16?2                 16?0                	;1
362 144  SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
363 144  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
364 144  SEPARATE/156              $165=     $165                 ?0                  	;0
365 144  FETCH_DIM_FUNC_ARG/93     $166=     $165                 213:0               	;1
366 144  SEND_VAR_EX/66            ?80       $166                 ?1                  	;0
367 144  DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
368 144  IS_SMALLER/19             #168=     214:0                $167                	;0
369 144  BOOL/52                   #149=     #168                 ?0                  	;0
370 144  BOOL_NOT/13               #169=     #149                 ?0                  	;0	<<358
371 144  JMPZ/43                   ?0        #169                 ?373                	;0	>>373
372 145  GOTO/253                  ?0        ?485                 ?215                	;0
373 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'array_keys'    	;1	<<371
374 147  FETCH_DIM_FUNC_ARG/93     $171=     16?2                 16?0                	;1
375 147  SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
376 147  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
377 147  FETCH_DIM_R/81            $173=     $172                 218:0               	;0
378 147  FETCH_DIM_R/81            $170=     16?2                 16?0                	;0
379 147  FETCH_DIM_R/81            $174=     $170                 $173                	;0
380 147  FETCH_DIM_R/81            $175=     $174                 219:0               	;0
381 147  JMPZ/43                   ?0        $175                 ?383                	;0	>>383
382 148  GOTO/253                  ?0        ?467                 ?220                	;0
383 150  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'array_keys'    	;1	<<381
384 150  FETCH_DIM_FUNC_ARG/93     $177=     16?2                 16?0                	;1
385 150  SEND_VAR_EX/66            ?80       $177                 ?1                  	;0
386 150  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
387 150  FETCH_DIM_R/81            $179=     $178                 223:0               	;0
388 150  FETCH_DIM_IS/90           $176=     16?2                 16?0                	;0
389 150  FETCH_DIM_IS/90           $180=     $176                 $179                	;0
390 150  ISSET_ISEMPTY_DIM_OBJ/115 #181=     $180                 224:2               	;33554432
391 150  JMPZ/43                   ?0        #181                 ?393                	;0	>>393
392 151  GOTO/253                  ?0        ?406                 ?225                	;0
393 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'array_keys'    	;1	<<391
394 153  FETCH_DIM_FUNC_ARG/93     $182=     16?2                 16?0                	;1
395 153  SEND_VAR_EX/66            ?80       $182                 ?1                  	;0
396 153  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
397 153  FETCH_DIM_R/81            $184=     $183                 228:0               	;0
398 153  CONCAT/8                  #185=     229:'<button type="button" onClick="showModal();" class="btn btn-sm btn-info waves-effect waves-light">' $184                	;0
399 153  CONCAT/8                  #186=     #185                 230:'</button>'     	;0
400 153  ECHO/40                   ?0        #186                 ?0                  	;0
401 154  GOTO/253                  ?0        ?405                 ?231                	;0
402 156  ECHO/40                   ?0        232:'</div>'         ?0                  	;0
403 157  GOTO/253                  ?0        ?506                 ?233                	;0
404 158  GOTO/253                  ?0        ?505                 ?234                	;0
405 160  GOTO/253                  ?0        ?424                 ?235                	;0
406 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'array_keys'    	;1
407 162  FETCH_DIM_FUNC_ARG/93     $188=     16?2                 16?0                	;1
408 162  SEND_VAR_EX/66            ?80       $188                 ?1                  	;0
409 162  DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
410 162  FETCH_DIM_R/81            $190=     $189                 238:0               	;0
411 162  FETCH_DIM_R/81            $187=     16?2                 16?0                	;0
412 162  FETCH_DIM_R/81            $191=     $187                 $190                	;0
413 162  FETCH_DIM_R/81            $192=     $191                 239:2               	;0
414 162  CONCAT/8                  #193=     240:'<button type="button" ' $192                	;0
415 162  CONCAT/8                  #194=     #193                 241:' class="btn btn-sm btn-info waves-effect waves-light">'	;0
416 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   242:'array_keys'    	;1
417 162  FETCH_DIM_FUNC_ARG/93     $195=     16?2                 16?0                	;1
418 162  SEND_VAR_EX/66            ?80       $195                 ?1                  	;0
419 162  DO_FCALL_BY_NAME/131      $196=     ?0                   ?0                  	;0
420 162  FETCH_DIM_R/81            $197=     $196                 244:0               	;0
421 162  CONCAT/8                  #198=     #194                 $197                	;0
422 162  CONCAT/8                  #199=     #198                 245:'</button>'     	;0
423 162  ECHO/40                   ?0        #199                 ?0                  	;0
424 164  GOTO/253                  ?0        ?485                 ?246                	;0
425 165  GOTO/253                  ?0        ?467                 ?247                	;0
426 167  JMPZ/43                   ?0        16?8                 ?429                	;0	>>429
427 167  QM_ASSIGN/22              #200=     248:'-xl'            ?0                  	;0
428 167  JMP/42                    ?0        ?430                 ?0                  	;0	>>430
429 167  QM_ASSIGN/22              #200=     249:'-sm'            ?0                  	;0	<<426
430 167  CONCAT/8                  #201=     250:'<span class="gap"></span><button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed' #200                	;0	<<428
431 167  CONCAT/8                  #202=     #201                 251:'" data-toggle="dropdown" aria-expanded="false">'	;0
432 167  JMPZ/43                   ?0        16?8                 ?435                	;0	>>435
433 167  QM_ASSIGN/22              #203=     252:'Options &nbsp; ' ?0                  	;0
434 167  JMP/42                    ?0        ?436                 ?0                  	;0	>>436
435 167  QM_ASSIGN/22              #203=     253:''               ?0                  	;0	<<432
436 167  CONCAT/8                  #204=     #202                 #203                	;0	<<434
437 167  CONCAT/8                  #205=     #204                 254:'<i class="fas fa-caret-down"></i></button>
                <div class="dropdown-menu">'	;0
438 167  ECHO/40                   ?0        #205                 ?0                  	;0
439 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   255:'array_slice'   	;3
440 168  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
441 168  JMPZ/43                   ?0        16?8                 ?444                	;0	>>444
442 168  QM_ASSIGN/22              #206=     257:0                ?0                  	;0
443 168  JMP/42                    ?0        ?445                 ?0                  	;0	>>445
444 168  QM_ASSIGN/22              #206=     258:1                ?0                  	;0	<<441
445 168  SEND_VAL_EX/116           ?96       #206                 ?2                  	;0	<<443
446 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'count'         	;1
447 168  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
448 168  DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
449 168  SEND_VAR_NO_REF_EX/50     ?112      $207                 ?3                  	;0
450 168  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
451 168  FE_RESET_R/77             $209=     $208                 ?464                	;0
452 168  FE_FETCH_R/78             #210=     $209                 16?9                	;464	>>464	<<463
453 168  ASSIGN/38                 ?201      16?7                 #210                	;0
454 169  BOOL_NOT/13               #212=     16?7                 ?0                  	;0
455 169  JMPZ/43                   ?0        #212                 ?458                	;0	>>458
456 170  NOP/0                     ?0        ?0                   ?0                  	;1
457 170  GOTO/253                  ?0        ?463                 ?261                	;0
458 172  CONCAT/8                  #213=     262:'<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' 16?9                	;0	<<455
459 172  CONCAT/8                  #214=     #213                 263:'\');">'        	;0
460 172  CONCAT/8                  #215=     #214                 16?7                	;0
461 172  CONCAT/8                  #216=     #215                 264:'</a>'          	;0
462 172  ECHO/40                   ?0        #216                 ?0                  	;0
463 174  JMP/42                    ?0        ?452                 ?0                  	;0	>>452
464 174  FE_FREE/127               ?0        $209                 ?0                  	;0	<<451
465 177  ECHO/40                   ?0        265:'</div>'         ?0                  	;0
466 179  GOTO/253                  ?0        ?402                 ?266                	;0
467 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   267:'array_keys'    	;1
468 182  FETCH_DIM_FUNC_ARG/93     $218=     16?2                 16?0                	;1
469 182  SEND_VAR_EX/66            ?80       $218                 ?1                  	;0
470 182  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
471 182  FETCH_DIM_R/81            $220=     $219                 269:0               	;0
472 182  FETCH_DIM_R/81            $217=     16?2                 16?0                	;0
473 182  FETCH_DIM_R/81            $221=     $217                 $220                	;0
474 182  FETCH_DIM_R/81            $222=     $221                 270:0               	;0
475 182  CONCAT/8                  #223=     271:'<button type="button" onClick="navigate(\'' $222                	;0
476 182  CONCAT/8                  #224=     #223                 272:'\');" class="btn btn-sm btn-info waves-effect waves-light">'	;0
477 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'array_keys'    	;1
478 182  FETCH_DIM_FUNC_ARG/93     $225=     16?2                 16?0                	;1
479 182  SEND_VAR_EX/66            ?80       $225                 ?1                  	;0
480 182  DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
481 182  FETCH_DIM_R/81            $227=     $226                 275:0               	;0
482 182  CONCAT/8                  #228=     #224                 $227                	;0
483 182  CONCAT/8                  #229=     #228                 276:'</button>'     	;0
484 182  ECHO/40                   ?0        #229                 ?0                  	;0
485 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'count'         	;1
486 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'array_slice'   	;3
487 185  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
488 185  JMPZ/43                   ?0        16?8                 ?491                	;0	>>491
489 185  QM_ASSIGN/22              #230=     281:0                ?0                  	;0
490 185  JMP/42                    ?0        ?492                 ?0                  	;0	>>492
491 185  QM_ASSIGN/22              #230=     282:1                ?0                  	;0	<<488
492 185  SEND_VAL_EX/116           ?96       #230                 ?2                  	;0	<<490
493 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'count'         	;1
494 185  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
495 185  DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
496 185  SEND_VAR_NO_REF_EX/50     ?112      $231                 ?3                  	;0
497 185  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
498 185  SEND_VAR_NO_REF_EX/50     ?80       $232                 ?1                  	;0
499 185  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
500 185  IS_SMALLER/19             #234=     285:0                $233                	;0
501 185  BOOL_NOT/13               #235=     #234                 ?0                  	;0
502 185  JMPZ/43                   ?0        #235                 ?504                	;0	>>504
503 186  GOTO/253                  ?0        ?466                 ?286                	;0
504 188  GOTO/253                  ?0        ?426                 ?287                	;0	<<502
505 191  GOTO/253                  ?0        ?83                  ?288                	;0
506 194  NOP/0                     ?0        289:1                ?0                  	;4294967295
*/

?>