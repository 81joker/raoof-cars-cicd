/* USP section — gold/cream split with checklist */
function USPSection() {
  const benefits = [
    'سائقون محترفون يتحدثون العربية والإنجليزية',
    'سيارات حديثة وفاخرة من أحدث الموديلات',
    'تغطية لجميع المدن الأوروبية الكبرى',
    'خدمة استقبال فاخرة من المطار على مدار الساعة',
    'أسعار واضحة وثابتة بدون رسوم خفية',
    'حجز مرن — يومي، أسبوعي، أو باقات سياحية',
    'دعم 24/7 عبر واتساب باللغة العربية',
    'سرية وخصوصية تامة لجميع رحلاتكم',
  ];
  return (
    <section style={{ background: '#111111' }}>
      <div style={{ maxWidth: 1440, margin: '0 auto', display: 'grid', gridTemplateColumns: '1fr 1fr', minHeight: 560 }}>
        {/* Right side (RTL first): image */}
        <div style={{
          background: `linear-gradient(180deg, rgba(17,17,17,0.2), rgba(17,17,17,0.65)), url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=1400&q=80')`,
          backgroundSize: 'cover', backgroundPosition: 'center',
        }} />
        {/* Left side (RTL second): copy */}
        <div style={{ padding: '80px 64px', color: '#F5F0E8', display: 'flex', flexDirection: 'column', justifyContent: 'center' }}>
          <div style={{
            fontFamily: "'Tajawal'", fontSize: 13, fontWeight: 500,
            letterSpacing: '0.32em', color: '#D4A017',
            textTransform: 'uppercase', marginBottom: 14,
          }}>لماذا تختارنا؟</div>
          <h2 style={{
            fontFamily: "'Cairo', 'Tajawal', sans-serif",
            fontSize: 'clamp(28px, 3.4vw, 40px)',
            fontWeight: 700, color: '#F5F0E8',
            margin: '0 0 32px', lineHeight: 1.3,
          }}>
            راحتكم وسلامتكم تأتي أولاً
          </h2>
          <ul style={{ listStyle: 'none', padding: 0, margin: 0, display: 'grid', gridTemplateColumns: '1fr', gap: 14 }}>
            {benefits.map((b, i) => (
              <li key={i} style={{ display: 'flex', alignItems: 'flex-start', gap: 14 }}>
                <span style={{
                  width: 24, height: 24, flexShrink: 0,
                  border: '1px solid #D4A017', color: '#D4A017',
                  display: 'inline-flex', alignItems: 'center', justifyContent: 'center',
                  marginTop: 3,
                }}><Icon name="check" size={14} /></span>
                <span style={{
                  fontFamily: "'Tajawal'", fontSize: 16, lineHeight: 1.75,
                  color: 'rgba(255,255,255,0.82)',
                }}>{b}</span>
              </li>
            ))}
          </ul>
        </div>
      </div>
    </section>
  );
}
window.USPSection = USPSection;
