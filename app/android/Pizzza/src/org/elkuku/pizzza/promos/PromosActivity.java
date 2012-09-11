package org.elkuku.pizzza.promos;

import android.app.Activity;
import android.os.Bundle;

public class PromosActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);

		if (savedInstanceState == null) {
			PromosListFragment fragment = new PromosListFragment();
			fragment.setArguments(getIntent().getExtras());
			getFragmentManager().beginTransaction().add(android.R.id.content, fragment).commit();
		}
	}
}
