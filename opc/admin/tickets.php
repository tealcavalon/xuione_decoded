<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?25                  ?0                  	;0	>>25
1   5    ASSIGN/38                 ?0        16?0                 1:array (
  0 => 'CLOSED',
  1 => 'OPEN',
  2 => 'RESPONDED TO',
  3 => 'READ BY USER',
  4 => 'NEW RESPONSE',
  5 => 'READ BY ME',
  6 => 'READ BY USER',
)	;0
2   6    ASSIGN/38                 ?1        16?1                 2:'Tickets'         	;0
3   7    INCLUDE_OR_EVAL/73        ?2        3:'header.php'       ?0                  	;2
4   8    ECHO/40                   ?0        4:'<div class="wrapper"' ?0                  	;0
5   9    FETCH_IS/89               $8=       5:'_SERVER'          ?0                  	;0
6   9    ISSET_ISEMPTY_DIM_OBJ/115 #9=       $8                   6:'HTTP_X_REQUESTED_WITH'	;16777216
7   9    BOOL_NOT/13               #10=      #9                   ?0                  	;0
8   9    JMPZ_EX/46                #10=      #10                  ?16                 	;0	>>16
9   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'strtolower'      	;1
10  9    FETCH_FUNC_ARG/92         $11=      9:'_SERVER'          ?0                  	;1
11  9    FETCH_DIM_FUNC_ARG/93     $12=      $11                  10:'HTTP_X_REQUESTED_WITH'	;1
12  9    SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
13  9    DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
14  9    IS_EQUAL/17               #14=      $13                  11:'xmlhttprequest' 	;0
15  9    BOOL/52                   #10=      #14                  ?0                  	;0
16  9    BOOL_NOT/13               #15=      #10                  ?0                  	;0	<<8
17  9    JMPZ/43                   ?0        #15                  ?19                 	;0	>>19
18  10   GOTO/253                  ?0        ?21                  ?12                 	;0
19  12   GOTO/253                  ?0        ?20                  ?13                 	;0	<<17
20  14   ECHO/40                   ?0        14:' style="display: none;"' ?0                  	;0
21  16   ECHO/40                   ?0        15:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
22  17   INCLUDE_OR_EVAL/73        ?11       16:'topbar.php'      ?0                  	;2
23  18   ECHO/40                   ?0        17:'					</div>
					<h4 class="page-title">Tickets</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card-box">
					<table class="table table-striped table-borderless dt-responsive nowrap w-100" id="tickets-table">
						<thead>
							<tr>
								<th class="text-center">ID</th>
								<th>Reseller</th>
                                <th>Title</th>
								<th class="text-center">Status</th>
								<th class="text-center">Created Date</th>
								<th class="text-center">Last Reply</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							' ?0                  	;0
24  19   GOTO/253                  ?0        ?34                  ?18                 	;0
25  21   INCLUDE_OR_EVAL/73        ?12       19:'session.php'     ?0                  	;2	<<0
26  22   INCLUDE_OR_EVAL/73        ?13       20:'functions.php'   ?0                  	;2
27  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'E6D500e19634D513'	;0
28  23   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
29  23   JMPZ/43                   ?0        $19                  ?31                 	;0	>>31
30  24   GOTO/253                  ?0        ?33                  ?23                 	;0
31  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'E72F42A93714BA87'	;0	<<29
32  26   DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
33  28   GOTO/253                  ?0        ?1                   ?26                 	;0
34  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'a58FDB6C7Fc6feb0'	;2
35  30   FETCH_DIM_FUNC_ARG/93     $21=      16?3                 29:'id'             	;1
36  30   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
37  30   SEND_VAL_EX/116           ?96       30:true              ?2                  	;0
38  30   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
39  30   ASSIGN/38                 ?18       16?2                 $22                 	;0
40  31   FE_RESET_R/77             $24=      16?2                 ?143                	;0
41  31   FE_FETCH_R/78             ?0        $24                  16?4                	;143	>>143	<<142
42  32   NOP/0                     ?0        ?0                   ?0                  	;1
43  32   GOTO/253                  ?0        ?91                  ?31                 	;0
44  34   FETCH_DIM_R/81            $25=      16?4                 32:'created'        	;0
45  34   ECHO/40                   ?0        $25                  ?0                  	;0
46  35   ECHO/40                   ?0        33:'</td>
								<td class="text-center">' ?0                  	;0
47  36   FETCH_DIM_R/81            $26=      16?4                 34:'last_reply'     	;0
48  36   ECHO/40                   ?0        $26                  ?0                  	;0
49  37   ECHO/40                   ?0        35:'</td>
								<td class="text-center">
									<div class="btn-group dropdown">
										<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="./ticket_view?id=' ?0                  	;0
50  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'intval'         	;1
51  38   FETCH_DIM_FUNC_ARG/93     $27=      16?4                 38:'id'             	;1
52  38   SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
53  38   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
54  38   ECHO/40                   ?0        $28                  ?0                  	;0
55  39   NOP/0                     ?0        ?0                   ?0                  	;1
56  39   GOTO/253                  ?0        ?106                 ?39                 	;0
57  41   ECHO/40                   ?0        40:', \'close\');"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
											' ?0                  	;0
58  43   ECHO/40                   ?0        41:'											<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
59  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'intval'         	;1
60  44   FETCH_DIM_FUNC_ARG/93     $29=      16?4                 44:'id'             	;1
61  44   SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
62  44   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
63  44   ECHO/40                   ?0        $30                  ?0                  	;0
64  45   ECHO/40                   ?0        45:', \'delete\');"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>
											' ?0                  	;0
65  46   NOP/0                     ?0        ?0                   ?0                  	;1
66  46   GOTO/253                  ?0        ?139                 ?46                 	;0
67  48   ECHO/40                   ?0        47:'</td>
								<td class="text-center"><span class="badge badge-' ?0                  	;0
68  49   FETCH_DIM_R/81            $31=      16?4                 48:'status'         	;0
69  49   FETCH_DIM_R/81            $32=      49:array (
  0 => 'secondary',
  1 => 'warning',
  2 => 'success',
  3 => 'warning',
  4 => 'info',
  5 => 'purple',
  6 => 'warning',
) $31                 	;0
70  49   ECHO/40                   ?0        $32                  ?0                  	;0
71  50   ECHO/40                   ?0        50:'">'              ?0                  	;0
72  51   FETCH_DIM_R/81            $33=      16?4                 51:'status'         	;0
73  51   FETCH_DIM_R/81            $34=      16?0                 $33                 	;0
74  51   ECHO/40                   ?0        $34                  ?0                  	;0
75  52   ECHO/40                   ?0        52:'</span></td>
								<td class="text-center">' ?0                  	;0
76  53   NOP/0                     ?0        ?0                   ?0                  	;1
77  53   GOTO/253                  ?0        ?44                  ?53                 	;0
78  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'intval'         	;1
79  55   FETCH_DIM_FUNC_ARG/93     $35=      16?4                 56:'id'             	;1
80  55   SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
81  55   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
82  55   ECHO/40                   ?0        $36                  ?0                  	;0
83  56   ECHO/40                   ?0        57:'</a></td>
								<td>' ?0                  	;0
84  57   FETCH_DIM_R/81            $37=      16?4                 58:'username'       	;0
85  57   ECHO/40                   ?0        $37                  ?0                  	;0
86  58   ECHO/40                   ?0        59:'</td>
								<td>' ?0                  	;0
87  59   FETCH_DIM_R/81            $38=      16?4                 60:'title'          	;0
88  59   ECHO/40                   ?0        $38                  ?0                  	;0
89  60   NOP/0                     ?0        ?0                   ?0                  	;1
90  60   GOTO/253                  ?0        ?67                  ?61                 	;0
91  62   ECHO/40                   ?0        62:'							<tr id="ticket-' ?0                  	;0
92  63   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'intval'         	;1
93  63   FETCH_DIM_FUNC_ARG/93     $39=      16?4                 65:'id'             	;1
94  63   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
95  63   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
96  63   ECHO/40                   ?0        $40                  ?0                  	;0
97  64   ECHO/40                   ?0        66:'">
								<td class="text-center"><a href="./ticket_view?id=' ?0                  	;0
98  65   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'intval'         	;1
99  65   FETCH_DIM_FUNC_ARG/93     $41=      16?4                 69:'id'             	;1
100 65   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
101 65   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
102 65   ECHO/40                   ?0        $42                  ?0                  	;0
103 66   ECHO/40                   ?0        70:'">'              ?0                  	;0
104 67   NOP/0                     ?0        ?0                   ?0                  	;1
105 67   GOTO/253                  ?0        ?78                  ?71                 	;0
106 69   ECHO/40                   ?0        72:'"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>View Ticket</a>
											' ?0                  	;0
107 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'E589A4bf54A2DaD1'	;2
108 70   SEND_VAL_EX/116           ?80       75:'adv'             ?1                  	;0
109 70   SEND_VAL_EX/116           ?96       76:'ticket'          ?2                  	;0
110 70   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
111 70   BOOL_NOT/13               #44=      $43                  ?0                  	;0
112 70   JMPZ/43                   ?0        #44                  ?115                	;0	>>115
113 71   NOP/0                     ?0        ?0                   ?0                  	;1
114 71   GOTO/253                  ?0        ?139                 ?77                 	;0
115 73   FETCH_DIM_R/81            $45=      16?4                 78:'status'         	;0	<<112
116 73   IS_SMALLER/19             #46=      79:0                 $45                 	;0
117 73   JMPZ/43                   ?0        #46                  ?120                	;0	>>120
118 74   NOP/0                     ?0        ?0                   ?0                  	;1
119 74   GOTO/253                  ?0        ?131                 ?80                 	;0
120 76   ECHO/40                   ?0        81:'											<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0	<<117
121 77   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'intval'         	;1
122 77   FETCH_DIM_FUNC_ARG/93     $47=      16?4                 84:'id'             	;1
123 77   SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
124 77   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
125 77   ECHO/40                   ?0        $48                  ?0                  	;0
126 78   NOP/0                     ?0        ?0                   ?0                  	;1
127 78   GOTO/253                  ?0        ?128                 ?85                 	;0
128 80   ECHO/40                   ?0        86:', \'reopen\');"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Re-Open</a>
											' ?0                  	;0
129 81   NOP/0                     ?0        ?0                   ?0                  	;1
130 81   GOTO/253                  ?0        ?58                  ?87                 	;0
131 83   ECHO/40                   ?0        88:'											<a class="dropdown-item" href="javascript:void(0);" onClick="api(' ?0                  	;0
132 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'intval'         	;1
133 84   FETCH_DIM_FUNC_ARG/93     $49=      16?4                 91:'id'             	;1
134 84   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
135 84   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
136 84   ECHO/40                   ?0        $50                  ?0                  	;0
137 85   NOP/0                     ?0        ?0                   ?0                  	;1
138 85   GOTO/253                  ?0        ?57                  ?92                 	;0
139 88   ECHO/40                   ?0        93:'										</div>
									</div>
								</td>
							</tr>
							' ?0                  	;0
140 90   NOP/0                     ?0        ?0                   ?0                  	;1
141 90   GOTO/253                  ?0        ?142                 ?94                 	;0
142 91   JMP/42                    ?0        ?41                  ?0                  	;0	>>41
143 91   FE_FREE/127               ?0        $24                  ?0                  	;0	<<40
144 94   ECHO/40                   ?0        95:'						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
145 95   GOTO/253                  ?0        ?146                 ?96                 	;0
146 97   INCLUDE_OR_EVAL/73        ?46       97:'footer.php'      ?0                  	;2
147 98   NOP/0                     ?0        98:1                 ?0                  	;4294967295
*/

?>