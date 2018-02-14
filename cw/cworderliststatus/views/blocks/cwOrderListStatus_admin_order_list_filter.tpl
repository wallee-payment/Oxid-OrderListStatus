<td valign="top" class="listfilter" height="20" nowrap>
	<div class="r1">
		<div class="b1">
			<select class="listedit" name="where[oxorder][oxtransstatus]" onChange="document.search.submit();">
				[{foreach from=$cwStatuses key=status item=label}]
					<option value="[{$status}]" [{if $cwSelectedStatus == $status}]SELECTED[{/if}]>[{$label}]</option>
				[{/foreach}]
			</select>
		
<!-- 			<input class="listedit" type="text" width="auto" maxlength="10" name="where[oxorder][oxtransstatus]" value="[{$where.oxorder.oxtransstatus}]"> -->
		</div>
	</div>
</td>
[{$smarty.block.parent}]