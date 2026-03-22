<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?70                  ?0                  	;0	>>70
1   5    ISSET_ISEMPTY_CV/197      #4=       16?0                 ?0                  	;33554432
2   5    JMPZ_EX/46                #4=       #4                   ?6                  	;0	>>6
3   5    FETCH_CONSTANT/99         #5=       ?0                   1:'STATUS_SUCCESS'  	;16
4   5    IS_EQUAL/17               #6=       16?0                 #5                  	;0
5   5    BOOL/52                   #4=       #6                   ?0                  	;0
6   5    JMPZ/43                   ?0        #4                   ?8                  	;0	>>8	<<2
7   6    GOTO/253                  ?0        ?103                 ?4                  	;0
8   8    ISSET_ISEMPTY_CV/197      #7=       16?0                 ?0                  	;33554432	<<6
9   8    JMPZ_EX/46                #7=       #7                   ?13                 	;0	>>13
10  8    FETCH_CONSTANT/99         #8=       ?0                   5:'STATUS_FLUSH'    	;16
11  8    IS_EQUAL/17               #9=       16?0                 #8                  	;0
12  8    BOOL/52                   #7=       #9                   ?0                  	;0
13  8    BOOL_NOT/13               #10=      #7                   ?0                  	;0	<<9
14  8    JMPZ/43                   ?0        #10                  ?16                 	;0	>>16
15  9    GOTO/253                  ?0        ?17                  ?8                  	;0
16  11   ECHO/40                   ?0        9:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					All blocked IP\'s have been flushed from the database.
				</div>
				' ?0                  	;0	<<14
17  13   GOTO/253                  ?0        ?104                 ?10                 	;0
18  14   GOTO/253                  ?0        ?103                 ?11                 	;0
19  16   FETCH_DIM_R/81            $11=      16?1                 12:'date'           	;0
20  16   ECHO/40                   ?0        $11                  ?0                  	;0
21  17   ECHO/40                   ?0        13:'</th>
									<th class="text-center">' ?0                  	;0
22  18   FETCH_DIM_R/81            $12=      16?1                 14:'actions'        	;0
23  18   ECHO/40                   ?0        $12                  ?0                  	;0
24  19   ECHO/40                   ?0        15:'</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
25  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'dC088F5BEC67Ce39'	;0
26  20   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
27  20   FE_RESET_R/77             $14=      $13                  ?61                 	;0
28  20   FE_FETCH_R/78             ?0        $14                  16?2                	;61	>>61	<<60
29  21   NOP/0                     ?0        ?0                   ?0                  	;1
30  21   GOTO/253                  ?0        ?45                  ?18                 	;0
31  23   FETCH_DIM_R/81            $15=      16?2                 19:'ip'             	;0
32  23   ECHO/40                   ?0        $15                  ?0                  	;0
33  24   ECHO/40                   ?0        20:'</td>
									<td>' ?0                  	;0
34  25   FETCH_DIM_R/81            $16=      16?2                 21:'notes'          	;0
35  25   ECHO/40                   ?0        $16                  ?0                  	;0
36  26   ECHO/40                   ?0        22:'</td>
									<td class="text-center">' ?0                  	;0
37  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'date'           	;2
38  27   SEND_VAL_EX/116           ?80       25:'Y-m-d H:i:s'     ?1                  	;0
39  27   FETCH_DIM_FUNC_ARG/93     $17=      16?2                 26:'date'           	;2
40  27   SEND_VAR_EX/66            ?96       $17                  ?2                  	;0
41  27   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
42  27   ECHO/40                   ?0        $18                  ?0                  	;0
43  28   NOP/0                     ?0        ?0                   ?0                  	;1
44  28   GOTO/253                  ?0        ?54                  ?27                 	;0
45  30   ECHO/40                   ?0        28:'								<tr id="ip-' ?0                  	;0
46  31   FETCH_DIM_R/81            $19=      16?2                 29:'id'             	;0
47  31   ECHO/40                   ?0        $19                  ?0                  	;0
48  32   ECHO/40                   ?0        30:'">
                                    <td class="text-center">' ?0                  	;0
49  33   FETCH_DIM_R/81            $20=      16?2                 31:'id'             	;0
50  33   ECHO/40                   ?0        $20                  ?0                  	;0
51  34   ECHO/40                   ?0        32:'</td>
									<td class="text-center">' ?0                  	;0
52  35   NOP/0                     ?0        ?0                   ?0                  	;1
53  35   GOTO/253                  ?0        ?31                  ?33                 	;0
54  37   ECHO/40                   ?0        34:'</td>
									<td class="text-center">
										<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
55  38   FETCH_DIM_R/81            $21=      16?2                 35:'id'             	;0
56  38   ECHO/40                   ?0        $21                  ?0                  	;0
57  39   ECHO/40                   ?0        36:', \'delete\');"><i class="mdi mdi-close"></i></button>
									</td>
								</tr>
								' ?0                  	;0
58  41   NOP/0                     ?0        ?0                   ?0                  	;1
59  41   GOTO/253                  ?0        ?60                  ?37                 	;0
60  42   JMP/42                    ?0        ?28                  ?0                  	;0	>>28
61  42   FE_FREE/127               ?0        $14                  ?0                  	;0	<<27
62  44   GOTO/253                  ?0        ?87                  ?38                 	;0
63  46   ECHO/40                   ?0        39:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
64  47   INCLUDE_OR_EVAL/73        ?18       40:'topbar.php'      ?0                  	;2
65  48   ECHO/40                   ?0        41:'					</div>
					<h4 class="page-title">' ?0                  	;0
66  49   FETCH_DIM_R/81            $23=      16?1                 42:'blocked_ip_addresses'	;0
67  49   ECHO/40                   ?0        $23                  ?0                  	;0
68  50   ECHO/40                   ?0        43:'</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				' ?0                  	;0
69  51   GOTO/253                  ?0        ?1                   ?44                 	;0
70  53   INCLUDE_OR_EVAL/73        ?20       45:'session.php'     ?0                  	;2	<<0
71  54   INCLUDE_OR_EVAL/73        ?21       46:'functions.php'   ?0                  	;2
72  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'E6d500e19634D513'	;0
73  55   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
74  55   JMPZ/43                   ?0        $26                  ?76                 	;0	>>76
75  56   GOTO/253                  ?0        ?78                  ?49                 	;0
76  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'E72f42a93714BA87'	;0	<<74
77  58   DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
78  60   GOTO/253                  ?0        ?89                  ?52                 	;0
79  62   ECHO/40                   ?0        53:'</th>
									<th class="text-center">' ?0                  	;0
80  63   FETCH_DIM_R/81            $28=      16?1                 54:'ip_address'     	;0
81  63   ECHO/40                   ?0        $28                  ?0                  	;0
82  64   ECHO/40                   ?0        55:'</th>
									<th>' ?0                  	;0
83  65   FETCH_DIM_R/81            $29=      16?1                 56:'notes'          	;0
84  65   ECHO/40                   ?0        $29                  ?0                  	;0
85  66   ECHO/40                   ?0        57:'</th>
									<th class="text-center">' ?0                  	;0
86  67   GOTO/253                  ?0        ?19                  ?58                 	;0
87  70   ECHO/40                   ?0        59:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
88  71   GOTO/253                  ?0        ?126                 ?60                 	;0
89  73   FETCH_STATIC_PROP_IS/176  $30=      61:'rRequest'        62:'XUI'            	;0
90  73   ISSET_ISEMPTY_DIM_OBJ/115 #31=      $30                  64:'flush'          	;33554432
91  73   BOOL_NOT/13               #32=      #31                  ?0                  	;0
92  73   JMPZ/43                   ?0        #32                  ?94                 	;0	>>94
93  74   GOTO/253                  ?0        ?101                 ?65                 	;0
94  76   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'A0C5C8de2109Dd97'	;0	<<92
95  76   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
96  77   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'header'         	;1
97  77   FETCH_CONSTANT/99         #34=      ?0                   70:'STATUS_FLUSH'   	;16
98  77   CONCAT/8                  #35=      73:'Location: ./ips?status=' #34                 	;0
99  77   SEND_VAL_EX/116           ?80       #35                  ?1                  	;0
100 77   DO_FCALL_BY_NAME/131      ?32       ?0                   ?0                  	;0
101 79   ASSIGN/38                 ?33       16?3                 74:'Blocked IP\'s'  	;0
102 80   GOTO/253                  ?0        ?108                 ?75                 	;0
103 83   ECHO/40                   ?0        76:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					IP has been added to the block list and propagated across all servers.
				</div>
                ' ?0                  	;0
104 85   ECHO/40                   ?0        77:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
                                    <th class="text-center">' ?0                  	;0
105 86   FETCH_DIM_R/81            $38=      16?1                 78:'id'             	;0
106 86   ECHO/40                   ?0        $38                  ?0                  	;0
107 87   GOTO/253                  ?0        ?79                  ?79                 	;0
108 89   INCLUDE_OR_EVAL/73        ?35       80:'header.php'      ?0                  	;2
109 90   ECHO/40                   ?0        81:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
110 91   FETCH_IS/89               $40=      82:'_SERVER'         ?0                  	;0
111 91   ISSET_ISEMPTY_DIM_OBJ/115 #41=      $40                  83:'HTTP_X_REQUESTED_WITH'	;16777216
112 91   BOOL_NOT/13               #42=      #41                  ?0                  	;0
113 91   JMPZ_EX/46                #42=      #42                  ?121                	;0	>>121
114 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'strtolower'     	;1
115 91   FETCH_FUNC_ARG/92         $43=      86:'_SERVER'         ?0                  	;1
116 91   FETCH_DIM_FUNC_ARG/93     $44=      $43                  87:'HTTP_X_REQUESTED_WITH'	;1
117 91   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
118 91   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
119 91   IS_EQUAL/17               #46=      $45                  88:'xmlhttprequest' 	;0
120 91   BOOL/52                   #42=      #46                  ?0                  	;0
121 91   BOOL_NOT/13               #47=      #42                  ?0                  	;0	<<113
122 91   JMPZ/43                   ?0        #47                  ?124                	;0	>>124
123 92   GOTO/253                  ?0        ?125                 ?89                 	;0
124 94   ECHO/40                   ?0        90:' style="display: none;"' ?0                  	;0	<<122
125 96   GOTO/253                  ?0        ?63                  ?91                 	;0
126 98   INCLUDE_OR_EVAL/73        ?44       92:'footer.php'      ?0                  	;2
127 99   NOP/0                     ?0        93:1                 ?0                  	;4294967295
*/

?>